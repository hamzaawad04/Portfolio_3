@extends('layouts.header')

@section('title', 'Add Recipe')

@section('content')
<style>
    #add-recipe-form {
        font-size: 1.75em;
        font-weight: bold;
        color: white;
        font-family: 'Times New Roman', Times, serif;
    }

    .form-label {
        font-size: 0.75em;
        font-weight: lighter; 
        color: white;
        font-family: 'Times New Roman', Times, serif;
    }

    .radio-type {
        font-size: 0.75em;
        font-weight: lighter; 
        color: white;
        font-family: 'Times New Roman', Times, serif;
    }
</style>

<div class="container mt-5" id="add-recipe-form">
    <h1 class="mb-4">Add a New Recipe</h1>

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

    <form action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Recipe Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter recipe name" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Recipe Description</label>
            <input type="text" class="form-control" id="description" name="description" rows="5" placeholder="Enter short recipe description..." required></input>
        </div>

        <label for="type" class="form-label">Recipe Type</label>
        <div class="row radio-type">
            <div class="col-2 col">
                <label for="french">French</label><br>
                <input type="radio" class="form-check" id="french" name="type" value="French" required>
            </div>
            <div class="col-2 col">
                <label for="italian">Italian</label><br>
                <input type="radio" class="form-check" id="italian" name="type" value="Italian" required>
            </div>
            <div class="col-2 col">
                <label for="indian">Indian</label><br>
                <input type="radio" class="form-check" id="indian" name="type" value="Indian" required>
            </div>
            <div class="col-2 col">
                <label for="chinese">Chinese</label>
                <input type="radio" class="form-check" id="chinese" name="type" value="Chinese" required>
            </div>
            <div class="col-2 col">
                <label for="mexican">Mexican</label>
                <input type="radio" class="form-check" id="mexican" name="type" value="Mexican" required>
            </div>
            <div class="col-2 col">
                <label for="others">Others</label>
                <input type="radio" class="form-check" id="others" name="type" value="Others" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="Cookingtime" class="form-label">Cooking Time (in minutes)</label>
            <input type="number" class="form-control" id="Cookingtime" name="Cookingtime" placeholder="Enter cooking time in minutes" required>
        </div>
        
        <div class="mb-3">
            <label for="ingredients" class="form-label">Ingredients</label>
            <textarea class="form-control" id="ingredients" name="ingredients" placeholder="Enter ingredients..." required></textarea>
        </div>

        <div class="mb-3">
            <label for="instructions" class="form-label">Instructions</label>
            <textarea class="form-control" id="instructions" name="instructions" placeholder="Enter cooking instructions..." required></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Recipe Image</label>
            <input class="form-control" type="file" id="image" name="image" required>
        </div>

        <button type="submit" class="btn btn-success">Submit Recipe</button>
    </form>
</div>
@endsection
