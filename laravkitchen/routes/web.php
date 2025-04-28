<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

Route::get('/', [RecipeController::class, 'showFeatured']);

Route::prefix('recipes')->group(function () {
    Route::get('/', [RecipeController::class, 'index'])->name('recipes.index');
    Route::get('/{rid}', [RecipeController::class, 'show'])->name('recipes.show');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/add-recipe', [RecipeController::class, 'create'])->name('recipes.create');
    Route::post('/add-recipe', [RecipeController::class, 'store'])->name('recipes.store');
    Route::get('/recipes/{rid}/edit', [RecipeController::class, 'edit'])->name('recipes.edit');
    Route::put('/recipes/{rid}', [RecipeController::class, 'update'])->name('recipes.update');
    Route::delete('/recipes/{rid}', [RecipeController::class, 'destroy'])->name('recipes.destroy');
});

