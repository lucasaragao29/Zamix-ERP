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
    
        <nav class="navbar navbar-expand-lg" style="background-color: rgb(240, 170, 112)">
            <a class="navbar-brand" href="/"></a>
            <img src="{{asset('imgs/logo.jpg')}}" alt="" srcset="" 
            style="width: 7%;
                border-radius: 10px; ">
            </button>
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
                <li class="nav-item" style="margin-left: 15rem;">
                <div class="btn-group">
                  <button type="button" class="btn btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Usuario
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/novo_usuario">Novo Perfil</a></li>
                    <li><a class="dropdown-item" href="/editar_usuario/{id}">Editar Perfil</a></li>
                    <li><a class="dropdown-item" href="#">Requisições</a></li>
                    <li><a class="dropdown-item" href="#">Produtos</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Loggout</a></li>
                  </ul>
                </div>
                </li>
              </ul>
            </div>
          </nav>
    
@endsection
          

