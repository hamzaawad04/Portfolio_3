@extends('layouts.header')

@section('title', $recipe->name)

@section('content')
<div class="container mt-5">
    <div class="card mb-3">
        <img src="{{ asset('images/' . $recipe->image) }}" class="card-img-top" alt="{{ $recipe->name }}">
        <div class="card-body">
            <h2 class="card-title">{{ $recipe->name }}</h2>
            <p class="card-text">{{ $recipe->description }}</p>
            <p><strong>Type:</strong> {{ $recipe->type }}</p>
            <p><strong>Cooking Time:</strong> {{ $recipe->cookingtime }} minutes</p>

            <h4>Ingredients</h4>
            <p>{{ $recipe->ingredients }}</p>

            <h4>Instructions</h4>
            <p>{{ $recipe->instructions }}</p>

            <a href="{{ url('/recipes') }}" class="btn btn-secondary mt-3">Back to Recipes</a>
        </div>
    </div>
</div>
@endsection