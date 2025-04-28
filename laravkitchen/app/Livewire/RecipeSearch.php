<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Recipe;
use Livewire\WithPagination;

class RecipeSearch extends Component
{
    use WithPagination;

    public $searchTerm = '';

    public function render()
    {

        $searchTerm = $this->searchTerm;

        $recipes = Recipe::query()
            ->when($searchTerm, function ($query) use ($searchTerm) {
                $query->where(function($q) use ($searchTerm) {
                    $q->where('name', 'like', '%' . $searchTerm . '%')
                      ->orWhere('type', 'like', '%' . $searchTerm . '%');
                });
            })
            ->paginate(6);

        return view('livewire.recipe-search', [
            'recipes' => $recipes,
        ]);
    }
}
