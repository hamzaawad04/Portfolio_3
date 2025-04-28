@extends('layouts.header')

@section('title', $recipe->name)

@section('content')
    <div class="container mt-5">
        <div class="card mb-3 bg-success text-white">
            <img src="{{ asset('images/' . $recipe->image) }}" class="card-img-top" alt="{{ $recipe->name }}">
            <div class="card-body">
                <h2 class="card-title">{{ $recipe->name }}</h2>
                <p class="card-text">{{ $recipe->description }}</p>
                <p><strong>Type:</strong> {{ $recipe->type }}</p>
                <p><strong>Cooking Time:</strong> {{ $recipe->Cookingtime }} minutes</p>

                <h4>Ingredients</h4>
                <p>{{ $recipe->ingredients }}</p>

                <h4>Instructions</h4>
                <p>{{ $recipe->instructions }}</p>
                <div class="text-center mt-3">
                    <a href="{{ url('/recipes') }}" class="btn bg-warning btn-secondary mt-3">Back to Recipes</a>
                </div>
                @auth
                    @if (Auth::id() === $recipe->uid)
                        <div class="mt-4 d-flex gap-2">
                            <a href="{{ url('/recipes/' . $recipe->rid . '/edit') }}" class="btn btn-warning">
                                Edit
                            </a>

                            <form action="{{ url('/recipes/' . $recipe->rid) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this recipe?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Delete
                                </button>
                            </form>
                        </div>
                    @endif
                @endauth
            </div>
        </div>
    </div>
@endsection
