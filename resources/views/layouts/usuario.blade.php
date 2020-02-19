<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Admin') }}</title>

            <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
            <!-- CSS -->
            <link  rel="stylesheet" href="{{ mix('/css/app.css')}}">

</head>



</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('usuario.usuario') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest

                   

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('usuario.usuario') }}"><i class="zmdi zmdi-home zmdi-hc-lg"></i> Inicio</a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('usuario.pedidos') }}"> <i class="zmdi zmdi-book zmdi-hc-lg"></i> Pedidos</a>
                          </li>
              
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('usuario.productos') }}"> <i class="zmdi zmdi-shopping-basket zmdi-hc-lg"></i> Productos </a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('usuario.carrito') }}"> <i class="zmdi zmdi-shopping-cart zmdi-hc-lg"></i>carrito</a>
                          </li>

                          <li class="nav-item">
                              <a class="nav-link" href="{{URL::to('/')}}/usuario/{{Auth::user()->id}}/edit"> 
                               {{-- <a class="nav-link"> --}}
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
                        

                    {{-- <li class="nav-item dropdown">
                     <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="zmdi zmdi-account-o zmdi-hc-lg"></i>  {{ Auth::user()->name }}
                                </a>
                            

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Salir
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                    </form>
                                </div>
                            </li> --}}
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content-admin')
        </main>
    </div>


    <footer></footer>
      <!-- Scripts -->
      <script  src="{{ mix('/js/app.js')}}" defer></script>
</body>
</html>
