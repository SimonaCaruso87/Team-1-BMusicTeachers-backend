<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('images/favicon.svg') }}" type="image/svg+xml">
        <!-- google font link -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <title>@yield('page-title') | {{ config('app.name', 'Laravel') }}</title>


        <!-- Scripts -->
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="bg-mt">
            <header>
                <div class="container">
                <nav class="navbar navbar-dark navbar-expand-md">
                    <a class="navbar-brand" href="">
                        <img class="logo-mt" src="{{ Vite::asset('file-img-pdf/logo/logo.png') }}" alt="">
                    </a>
                    <div class="d-flex align-items-center justify-content-between">   
                        <div class="button-wrapper">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                        <div class="collapse navbar-collapse" id="navbarText">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                
                                <li class="nav-item ">
                                    <a class="nav-link text-light" href="{{ route('user.teachers.index') }}">I nostri teacher</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link text-light" href="{{ route('user.messages.index') }}">Messaggi</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link text-light" href="{{ route('user.dashboard') }}">Dashboard</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link text-light" href="{{ route('user.reviews.index') }}">Reviews</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link text-light" href="">Assistenza</a>
                                </li>

                            </ul>

                            
                            
    
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button type="submit" class="btn button-logout">
                                    Log Out
                                </button>
                            </form>
                            
                            
                        </div>
                    </nav>
                </div>
            </header>


    
            <main class="py-4">
                <div>
                    @yield('main-content')
                </div>
            </main>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
