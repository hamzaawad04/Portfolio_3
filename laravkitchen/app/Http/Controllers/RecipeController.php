<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

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
}
