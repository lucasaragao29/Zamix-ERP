@include('app')
@yield('header')

    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;); margin-top:1rem;" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Inicio</a></li>
              <li class="breadcrumb-item"><a href="/estoque">Estoque</a></li>>
              <li class="breadcrumb-item active" aria-current="page">Retirar Produto</li>
            </ol>
          </nav>
        <form style="margin-top: 2rem;">
            @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Numero da Requisição</label>
                <input type="number" class="form-control" id="inputEmail4" name='requisicao'>
            </div>
        </div>
        <button type="submit" class="btn" style="background-color:green; color:white">Retirar</button>
  </form>
</div>
@yield('footer')
