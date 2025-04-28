@extends('layouts.header')

@section('title', 'Recipes')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4" style="
    font-size: 1.75em;
    font-weight: bold;
    color: white;
    font-family: 'Times New Roman', Times, serif;">Find Your Favorite Recipes</h1>
    @livewire('recipe-search')
</div>
@endsection
