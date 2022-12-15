@include('app')
@yield('header')
<style>
    .card:hover{
    cursor: pointer;
    size: 10%;
    background-color:rgb(245, 98, 0);
    transform: scale(120%);
    color:white;
    
}
</style>
<div class="container">
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;); margin-top:1rem;" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Inicio</a></li>
      <li class="breadcrumb-item active" aria-current="page">Estoque</li>
    </ol>
  </nav>
    <div class="card-deck">
        <div class="card">
          <div class="card-body">
            <a href="/editar_usuario/{{Auth::user()->id}}">
            <h5 class="card-title"><i class="fa-solid fa-pain"></i>Editar Usuario</h5>
            <p class="card-text">Acesse para editar o seu usuario.</p>
            </a>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <a href="/estoque/retirar_produto">
            <h5 class="card-title"><i class="fa-solid fa-cart-shopping"></i>Requisição</h5>
            <p class="card-text">Acesse retirar uma Requisição.</p>
            </a>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <a href="/estoque/relatorio">
            <h5 class="card-title"><i class="fa-solid fa-clipboard"></i>Relatorios</h5>
            <p class="card-text">Acesse consultar relatorios.</p>
            </a>
          </div>
        </div>
        <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                                <button type="submit" class="btn btn-danger">Deslogar</button>
                            </form>
       
      </div>
    </div>
@yield('footer')