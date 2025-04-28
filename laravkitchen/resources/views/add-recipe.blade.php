@extends('layouts.header')

@section('title', 'Edit Recipe')

@section('content')
<div class="container mt-5" id="edit-recipe-form">
    <h1 class="mb-4">Edit Recipe</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Please fix the following errors:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('recipes.update', $recipe->rid) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Recipe Name</label>
            <input type="text" class="form-control" id="name" name="name" 
                   value="{{ old('name', $recipe->name) }}" placeholder="Enter recipe name" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Recipe Description</label>
            <input type="text" class="form-control" id="description" name="description"
                   value="{{ old('description', $recipe->description) }}" placeholder="Enter short recipe description..." required>
        </div>

        <label for="type" class="form-label">Recipe Type</label>
        <div class="row radio-type">
            @php
                $types = ['French', 'Italian', 'Indian', 'Chinese', 'Mexican', 'Others'];
            @endphp
            @foreach ($types as $type)
                <div class="col-2 col">
                    <label for="{{ strtolower($type) }}">{{ $type }}</label><br>
                    <input type="radio" class="form-check" id="{{ strtolower($type) }}" name="type" 
                        value="{{ $type }}" {{ old('type', $recipe->type) == $type ? 'checked' : '' }} required>
                </div>
            @endforeach
        </div>

        <div class="mb-3">
            <label for="Cookingtime" class="form-label">Cooking Time (in minutes)</label>
            <input type="number" class="form-control" id="Cookingtime" name="Cookingtime" 
                   value="{{ old('Cookingtime', $recipe->Cookingtime) }}" placeholder="Enter cooking time in minutes" required>
        </div>
        
        <div class="mb-3">
            <label for="ingredients" class="form-label">Ingredients</label>
            <textarea class="form-control" id="ingredients" name="ingredients" rows="5" placeholder="Enter ingredients..." required>{{ old('ingredients', $recipe->ingredients) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="instructions" class="form-label">Instructions</label>
            <textarea class="form-control" id="instructions" name="instructions" rows="5" placeholder="Enter cooking instructions..." required>{{ old('instructions', $recipe->instructions) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Recipe Image (optional to update)</label>
            <input class="form-control" type="file" id="image" name="image">
            <div class="mt-2">
                <small>Current image:</small><br>
                <img src="{{ asset('images/' . $recipe->image) }}" alt="Current Recipe Image" style="width: 200px; height: auto;">
            </div>
        </div>

        <button type="submit" class="btn btn-success">Update Recipe</button>
    </form>
</div>
@endsection
