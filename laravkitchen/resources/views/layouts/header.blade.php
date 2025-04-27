<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') | Comfort Kitchen</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href = "{{ asset ('css/home.css') }}" />
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-success navbar-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
          <header id="company-name">
            <em>Comfort Kitchen</em>
          </header>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapsibleNavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
            </li>
            @auth
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/account') ? 'active' : '' }}" href="{{ url('/account') }}">Account</a>
            </li>
            @endauth
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/recipes') ? 'active' : '' }}" href="{{ url('/recipes') }}">Recipes</a>
            </li>
            @guest
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/login') ? 'active' : '' }}" href="{{ url('/login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/register') ? 'active' : '' }}" href="{{ url('/register') }}">Register</a>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid" style="margin-top: 0px;">
        @yield('content')
    </div>
@livewireScripts
</body>
</html>