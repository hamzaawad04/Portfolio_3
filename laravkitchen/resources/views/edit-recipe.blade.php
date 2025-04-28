@extends('layouts.header')

@section('title', 'Edit Recipe')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Edit Recipe</h1>

    <form action="{{ route('recipes.update', $recipe->rid) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') 

        <div class="mb-3">
            <label for="name" class="form-label">Recipe Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $recipe->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Recipe Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $recipe->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="Cookingtime" class="form-label">Cooking Time (minutes)</label>
            <input type="number" class="form-control" id="Cookingtime" name="Cookingtime" value="{{ old('Cookingtime', $recipe->Cookingtime) }}" required>
        </div>

        <div class="mb-3">
            <label for="ingredients" class="form-label">Ingredients</label>
            <textarea class="form-control" id="ingredients" name="ingredients" rows="5" required>{{ old('ingredients', $recipe->ingredients) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="instructions" class="form-label">Instructions</label>
            <textarea class="form-control" id="instructions" name="instructions" rows="5" required>{{ old('instructions', $recipe->instructions) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Recipe Image (optional to update)</label>
            <input class="form-control" type="file" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-success">Update Recipe</button>
    </form>
</div>
@endsection
