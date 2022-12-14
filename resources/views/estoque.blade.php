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
            <a href="/estoque/consulta">
            <h5 class="card-title"><i class="fa-solid fa-magnifying-glass"></i>Consultar Estoque</h5>
            <p class="card-text">Acesse verificar os produtos no estoque.</p>
          </a>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <a href="/estoque/cadastro_produtos">
            <h5 class="card-title"><i class="fa-solid fa-plus"></i>Adicionar Produto</h5>
            <p class="card-text">Acesse para adicionar produto ao estoque.</p>
            </a>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <a href="/estoque/retirar_produto">
            <h5 class="card-title"><i class="fa-solid fa-cart-shopping"></i>Requisitar Produto</h5>
            <p class="card-text">Acesse retirar produto mediante Requisição.</p>
            </a>
          </div>
        </div>
      </div>
    </div>
@yield('footer')