<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----======== CSS ======== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/form.css')}}" />
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <title>Circa</title>
</head>
<body>
  
  <section class="home">
    <!-- Header -->
    <header class="header">
      <nav class="nav">
        <a href="/" class="nav_logo">Circa</a>
        @auth
        <ul class="nav_items">
          <li class="nav_item">
            <a href="/dashboard" class="nav_link">Dashboard</a>
            <a href="/orderissues" class="nav_link">Order Issues</a>
            <a href="/orderform" class="nav_link">Order Form</a>
            <a href="https://sonepar.com/en/about" class="nav_link">About</a>
            <a href="https://www.sonepar.com/en/contact-us" class="nav_link">Contact</a>
          </li>
        </ul>
        <li class="nav_item">
          <span class=""><strong>Welcome {{auth()->user()->name}}</strong></span>
          <form method="POST" action="/logout">
            @csrf
            <button class="btn btn-light" type="submit">
              <span><i class="uil uil-signout"></i></i>Logout</span>
            </button>
          </form>
        </li>
        @else
        <li>
          <a href="/register" class="btn btn-light" role="button">Register</a>
          <a href="/login" class="btn btn-light" role="button">Login</a>
        </li>
        @endauth
        {{-- for flash message below --}}
        <x-flash-message />
      </nav>
    </header>
    <div class="form-center">
    {{$slot}}
    </div>
  </section>
  <!----====== Scripts ======= --->
    {{-- script to use alpinejs makes flash message disappear after a couple seconds --}}
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="{{asset('js/form.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>