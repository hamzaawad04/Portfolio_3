@extends('layouts.header')

@section('title', 'Home')

@section('content')
<div class="row" id="home-row">
      <div class="col-sm-8 g-0">
        <img
          src="{{ asset('images/comfort_kitchen.jpg') }}"
          alt="Comfort Kitchen"
          class="img-fluid"
          id="home-img"
        />
      </div>
      <div class="col-sm-4 bg-success g-0">
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
      </div>
    </div>

    <div class="container-fluid" id="recipe-box">
      <div class="row" id="recipe-row">
        <div class="col-sm-4">
          <a href="{{ url('/recipes/') }} #recipe-bbq">
            <div class="card">
              <img
                src="{{ asset('images/honey-barbecue-chicken-pizza-3-scaled.jpg') }}"
                alt="BBQ Chicken Pizza"
                class="card-img-top"
                id="recipe_image"
              />
              <div class="card-img-overlay">
                <h4 class="card-title">Smokey Maple BBQ Chicken Pizza</h4>
                <p class="card-text">
                  A sweet and tangy blend of maple syrup, barbecue sauce, and
                  tender chicken, this pizza is a mouthwatering treat that will
                  leave you craving more.
                </p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a href="{{ url('/recipes/') }} #recipe-truffle">
            <div class="card">
              <img
                src="{{ asset('images/truffle-pizza.jpg') }}"
                alt="Truffle Pizza"
                class="card-img-top"
                id="recipe_image"
              />
              <div class="card-img-overlay">
                <h4 class="card-title">Truffle Honey Ricotta Delight</h4>
                <p class="card-text">
                  A luxurious blend of truffle oil, honey, and creamy ricotta,
                  this pizza is a decadent treat that will satisfy your
                  cravings.
                </p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a href="{{ url('/recipes/') }} #recipe-firecracker">
            <div class="card">
              <img
                src="{{ asset('images/firecrackerpizza.jpg') }}"
                alt="Firecracker Pizza"
                class="card-img-top"
                id="recipe_image"
              />
              <div class="card-img-overlay">
                <h4 class="card-title">Spicy Mediterranean Firecracker</h4>
                <p class="card-text">
                  A fiery blend of Mediterranean spices and fresh herbs, this
                  pizza is a flavor explosion that will leave you craving more.
                </p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
@endsection