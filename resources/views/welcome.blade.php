<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body>
        <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
              <a class="navbar-item" href="{{ url('/') }}">
                <img src="{{ asset('/images/logo3.png') }}">
              </a>
          
              <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
              </a>
            </div>
          
            <div id="navbarBasicExample" class="navbar-menu">
              <div class="navbar-start">
                <a class="navbar-item">
                  Learn
                </a>
          
                <a class="navbar-item">
                  Discuss
                </a>

                <a href="" class="navbar-item">
                    Share
                </a>
              </div>
          
              <div class="navbar-end">
                @if(Auth::guest())
                <div class="navbar-item">
                    <div class="buttons">
                      <a href="{{ route('register') }}" class="button is-primary">
                        <strong>Join in Discussion</strong>
                      </a>
                      <a href="{{ route('login') }}" class="button is-light">
                        Log in
                      </a>
                    </div>
                  </div>
                @else
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                      Hi Ogi
                    </a>
            
                    <div class="navbar-dropdown">
                      <a class="navbar-item">
                        <i class="fas fa-fw fa-user m-r-10"></i> Profile
                      </a>
                      <a class="navbar-item">
                        <i class="fas fa-fw fa-bell m-r-10"></i> Notification
                      </a>
                      <a class="navbar-item">
                        <i class="fas fa-fw fa-cog m-r-10"></i> Setting
                      </a>
                      <hr class="navbar-divider">
                      <a class="navbar-item">
                        <i class="fas fa-fw fa-sign-out-alt m-r-10"></i> Logout
                      </a>
                    </div>
                  </div>
                @endif
                
              </div>
            </div>
          </nav>
        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> --}}
        <script src="{{ asset('js/navbar.js') }}"></script>
    </body>
</html>
