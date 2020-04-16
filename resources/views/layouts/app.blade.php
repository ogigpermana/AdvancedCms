<!DOCTYPE html>
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
    <div id="app">
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
          
                @if(Auth::guest())
                <div class="navbar-end">
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
                <div class="navbar-end p-r-75">
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
        @yield('content')
    </div>
    <script src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>
