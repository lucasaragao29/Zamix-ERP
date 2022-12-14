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
            <a href="/nova_requisição">
            <h5 class="card-title"><i class="fa-solid fa-plus"></i>Nova Requisição</h5>
            <p class="card-text">Acesse para realizar uma nova requisição.</p>
          </a>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <a href="/consultar_requição">
            <h5 class="card-title"><i class="fa-sharp fa-solid fa-clipboard"></i>Consultar Requisição</h5>
            <p class="card-text">Acesse para consultar a sua requisição.</p>
            </a>
          </div>
        </div>
      </div>
    </div>
@yield('footer')