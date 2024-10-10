<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'T1-2022110006')</title>

    @vite(['resources/sass/app.scss', 'resources/css/app.css'])
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="{{ route('home') }}">T1-2022110006</a>
            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="#navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle Navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-1 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{route('products.index')}}" class="nav-link text-white">
                            Products
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('body')

    @vite(['resources/js/app.js'])
</body>
</html>
