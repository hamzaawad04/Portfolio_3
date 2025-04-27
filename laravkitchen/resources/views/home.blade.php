@extends('layouts.header')

@section('title', 'Home')

@section('content')
<div class="row" id="home-row">
      <div class="col-sm-8 g-0" style="height: 100vh;">
        <img
          src="{{ asset('images/comfort_kitchen.jpg') }}"
          alt="Comfort Kitchen"
          class="img-fluid"
          id="home-img"
        />
      </div>
      <div class="col-sm-4 bg-success g-0" style="height: 100vh;">
        <div class="container" id="introduction">
          <h1>Welcome to Comfort Kitchen</h1>
          <pre>
Name: Hamza Awad
Student Number: 220081621
Email Address: 220081621@aston.ac.uk 
Address: Lorem ipsum.
                </pre>
          <p class="history">
            Comfort Kitchen brings the heartwarming flavors of Italy straight to
            your home, specializing in authentic and innovative pizzas inspired
            by centuries-old traditions. Rooted in Naples, the birthplace of
            pizza, our menu celebrates the rich heritage of Italian cuisine
            while adding a modern twist. From classic Margherita with its simple
            yet bold flavors to gourmet creations like truffle mushroom and
            spicy Diavola, each pizza is crafted with fresh, high-quality
            ingredients. Born from a passion for comfort food, Comfort Kitchen
            reimagines the art of pizza-making, blending old-world charm with
            contemporary flavors for a truly satisfying experience.
          </p>
        </div>
        <div class="container" id="featured-recipes">
          <h2>Featured Recipes</h2>
          <div class="row">
            @foreach ($recipes as $recipe)
            <div class="col-sm-4 mb-3">
              <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/' . $recipe->image) }}" class="card-img-top" alt="{{ $recipe->name }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $recipe->name }}</h5>
                  <p class="card-text">{{ $recipe->description }}</p> 
                  <a href="{{ url('/recipes/' . $recipe->rid) }}" class="btn btn-primary">View Recipe</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
      </div>
</div>
@endsection