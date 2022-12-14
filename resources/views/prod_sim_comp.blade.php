@include('app')
@yield('header')
<div class="container">
    <div class="card-deck">
        <div class="card">
          <div class="card-body">
            <a href="/estoque/cadastro_produtos_simples">
            <h5 class="card-title"><i class="fa-solid fa-magnifying-glass"></i>Adicionar Produto Simples</h5>
            <p class="card-text">Acesse para adicionar produto simples ao estoque.</p>
          </a>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <a href="/estoque/cadastro_produtos_comp">
            <h5 class="card-title"><i class="fa-solid fa-plus"></i>Adicionar Produto Composto</h5>
            <p class="card-text">Acesse para adicionar produto composto ao estoque.</p>
            </a>
          </div>
        </div>
      </div>
    </div>
@yield('footer')