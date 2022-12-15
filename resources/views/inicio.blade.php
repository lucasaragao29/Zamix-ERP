
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
        <a href="/estoque">
          <h5 class="card-title"><i class="fa-solid fa-cart-shopping"></i>Estoque</h5>
          <p class="card-text">Acesse para verificar o estoque, adicionar, remover ou alterar produtos.</p>
      </a>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <a href="http:/requisição">
          <h5 class="card-title"><i class="fa-sharp fa-solid fa-clipboard"></i>Requisição</h5>
          <p class="card-text">Acesse para verificar as requisições ou realizar uma nova.</p>
        </a>
      </div>
    </div>
    <div class="card">
      <a href="/relatorio">
        <div class="card-body">
          <h5 class="card-title"><i class="fa-sharp fa-solid fa-book"></i>Relatórios</h5>
          <p class="card-text">Relatorios de Entrada/Saida de estoque.</p>
        </div>
      </a>
    </div>
  </div>
</div>

@yield('footer')