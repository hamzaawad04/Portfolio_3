@extends('layouts.header')

@section('title', 'Recipes')

@section('content')
<div class="container mt-5">
    @livewire('recipe-search')
</div>
@endsection