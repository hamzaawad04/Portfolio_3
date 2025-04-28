<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;


class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes', compact('recipes'));
    }

    public function show($rid)
    {
        $recipe = Recipe::findOrFail($rid);
        return view('recipe-show', compact('recipe'));
    }

    public function showFeatured()
    {
        $recipes = Recipe::inRandomOrder()->take(1)->get();
        return view('home', compact('recipes'));
    }

    public function create()
    {
        return view('add-recipe');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'type' => 'required|in:French,Italian,Indian,Chinese,Mexican,Others', 
            'Cookingtime' => 'required|integer|min:1', 
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Recipe::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'type' => $validated['type'],
            'Cookingtime' => $validated['Cookingtime'],
            'ingredients' => $validated['ingredients'],
            'instructions' => $validated['instructions'],
            'image' => $imageName,
            'uid' => Auth::id(),
        ]);


        
        return redirect('/recipes')->with('success', 'Recipe added successfully!');
    }

    public function destroy($id)
    {
        $recipe = Recipe::findOrFail($id);

        if ($recipe->uid !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $recipe->delete();

        return redirect('/recipes')->with('success', 'Recipe deleted successfully!');
    }


    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);

        if ($recipe->uid !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('edit-recipe', compact('recipe'));
    }

    public function update(Request $request, $id)
    {
        $recipe = Recipe::findOrFail($id);

        if ($recipe->uid !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $recipe->update($validated);

        return redirect('/recipes')->with('success', 'Recipe updated successfully!');
    }

}