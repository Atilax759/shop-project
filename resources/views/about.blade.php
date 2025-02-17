<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="antialiased">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">CarShop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/about">About Me </a>
            </li>

            <li class="nav-item ">
                @if(Route::has('login'))
                    @auth
                        <a class="nav-link" href="/admin/products">Products </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                           class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                               class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth

                @else

                @endif
            </li>
    </ul>
    </div>
</nav>
<div class=" h-100 d-flex align-items-center justify-content-center mt-5">

        <div class="card col-3 m-3 " style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">About Me</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"> My Photo :<img src="{{ asset('photo/me.jpg' ) }}" width="50" alt=""></li>
                <li class="list-group-item">My Name : Atila </li>
                <li class="list-group-item">My Family : Ammari</li>
                <li class="list-group-item">My Grade : Ninth</li>
                <li class="list-group-item">My School : Bootorab</li>
                <li class="list-group-item">My Teacher : Jahangir Qadim Khani</li>
                <li class="list-group-item">My Github : <a target="_blank" href="https://github.com/Atilax759/shop-project">My Github Link</a></li>
            </ul>
        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>
</html>
