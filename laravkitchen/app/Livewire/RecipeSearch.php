<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Recipe;
use Livewire\WithPagination;

class RecipeSearch extends Component
{
    use WithPagination;

    public $searchTerm = '';

    public function updatingSearchTerm()
    {
        $this->resetPage();
    }

    public function render()
    {
        $recipes = Recipe::query()
            ->when($this->searchTerm, function ($query) {
                $query->where(function($q) {
                    $q->where('name', 'like', '%' . $this->searchTerm . '%')
                      ->orWhere('type', 'like', '%' . $this->searchTerm . '%');
                });
            })
            ->paginate(6);

        return view('livewire.recipe-search', [
            'recipes' => $recipes,
        ]);
    }
}
