@extends('layouts.header')

@section('title', 'Home')

@section('content')
    <div class="row" id="home-row">
        <div class="col-12 col-md-8 g-0">
            <img src="{{ asset('images/comfort_kitchen.jpg') }}" alt="Comfort Kitchen"
                class="img-fluid w-100 h-100 object-fit-cover" id="home-img" style="min-height: 300px;" />
        </div>

        <div class="col-12 col-md-4 bg-success g-0">
            <div class="container p-4" id="introduction">
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

                <h2 class="mt-4"
                    style="
                font-size: 1.75em;
                font-weight: bold;
                color: burlywood;
                font-family: 'Times New Roman', Times, serif;">
                    Featured Recipe</h2>

                <div class="row">
                    @foreach ($recipes as $recipe)
                        <div class="col-12 mb-3">
                            <div class="card w-100 bg-success">
                                <img src="{{ asset('images/' . $recipe->image) }}" class="card-img-top"
                                    alt="{{ $recipe->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $recipe->name }}</h5>
                                    <p class="card-text">{{ $recipe->description }}</p>
                                    <div class="text-center mt-3">
                                        <a href="{{ url('/recipes/' . $recipe->rid) }}" class="btn btn-warning">View
                                            Recipe</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div> <!-- container -->
        </div> <!-- right panel -->
    </div> <!-- home-row -->
@endsection
