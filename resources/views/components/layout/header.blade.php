@include('components.layout.scripts')
@section('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('scripts')
    <title>Zamix Gestão</title>
</head>
 <body>

  <nav class="navbar navbar-expand-md navbar-light " style="background-color: rgb(255, 117, 4)">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{asset('imgs/logo.jpg')}}" alt="" srcset="" 
          style="width: 25%;
              border-radius: 10px; ">
          </button>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
              <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 30%">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/estoque">Estoque</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/requisição">Requisição</a>
                    </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto" >
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item" style="margin-left: 25rem;" >
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/novo_usuario">{{ __('Registrar') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/menu_usuario" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <ul class="dropdown-menu">
                            <li class="nav-item dropdown">
                              <li><a class="dropdown-item" href="/novo_usuario">Novo Perfil</a></li>
                                    <li><a class="dropdown-item" href="/editar_usuario/{id}">Editar Perfil</a></li>
                                    <li><a class="dropdown-item" href="#">Requisições</a></li>
                                    <li><a class="dropdown-item" href="#">Produtos</a></li>
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@endsection
    
       

          

