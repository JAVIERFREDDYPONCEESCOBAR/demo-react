<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Admin') }}</title>

            <!-- CSS -->
            <link  rel="stylesheet" href="{{ mix('/css/admin.css')}}">

</head>



</head>
<body>
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-black shadow-sm">
            <div class="container-fluid">
                <a class="logo" href="{{ route('admin.admin') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> --}}
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                        <li class="nav-item">
                            <a class="nav-link"> 
                                      <i class="zmdi zmdi-account-o zmdi-hc-lg"></i>{{ Auth::user()->name }}
                             </a> 
                        </li>


                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout')}}"  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="zmdi zmdi-square-right zmdi-hc-lg"></i>Salir
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                @csrf
                            </form>
                        </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="main">
            @yield('content-admin')
        </main>
    </div>


    <footer></footer>
      <!-- Scripts -->
      <script  src="{{ mix('/js/admin.js')}}" defer></script>
</body>
</html>
