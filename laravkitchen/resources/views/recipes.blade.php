@extends('layouts.header')

@section('title', 'Recipes')

@section('content')
<div class="container mt-5">
    <div class="row">
        @foreach ($recipes as $recipe)
        <div class="col-sm-4 mb-3">
            <div class="card bg-success" style="width: 18rem;">
                <img src="{{ asset('images/' . $recipe->image) }}" class="card-img-top" alt="{{ $recipe->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $recipe->name }}</h5>
                    <p class="card-text">{{ $recipe->description }}</p>
                    <p class="card-text"><strong>Cooking Time:</strong> {{ $recipe->cookingtime }} minutes</p>
                    <p class="card-text"><strong>Cuisine Type:</strong> {{ $recipe->type }}</p>
                    <div class="text-center mt-3">
                        <a href="{{ url('/recipes/' . $recipe->rid) }}" class="btn btn-warning">View Recipe</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>