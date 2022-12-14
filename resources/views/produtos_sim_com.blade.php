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
    <div class="card-deck">
        <div class="card">
          <div class="card-body">
            <a href="/estoque/produtos">
            <h5 class="card-title"><i class="fa-solid fa-magnifying-glass"></i>Consultar Estoque Simples</h5>
            <p class="card-text">Acesse verificar os produtos no estoque.</p>
          </a>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <a href="/estoque/produtos_compostos">
            <h5 class="card-title"><i class="fa-solid fa-plus"></i>Consultar Estoque Composto</h5>
            <p class="card-text">Acesse para adicionar produto ao estoque.</p>
            </a>
          </div>
        </div>
      </div>
    </div>
@yield('footer')