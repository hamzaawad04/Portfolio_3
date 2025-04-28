<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Recipe;

class RecipeSearch extends Component
{
    public $searchTerm = '';

    public function render()
    {
        $recipes = Recipe::where('name', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('type', 'like', '%' . $this->searchTerm . '%')
            ->get();

        return view('livewire.recipe-search', [
            'recipes' => $recipes,
        ]);
    }
}
