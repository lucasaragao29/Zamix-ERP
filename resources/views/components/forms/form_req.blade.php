@include('app')
@yield('header')

    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
          </nav>
        <form style="margin-top: 2rem;">
            @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nome do Requerente</label>
                <input type="text" class="form-control" value=" {{ Auth::user()->name }} " id="inputEmail4" name='nome_req'>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nome do Produto</label>
                <input type="name" class="form-control" value="" id="inputEmail4" name='nome_prod'>
            </div>
            <div class="form-group col-md-3">
                <label for="inputAddress">Quantidade</label>
                <input type="number" class="form-control" id="inputAddress" name='quant'>
                <label for="">Data</label>
            <input class="form-control" type="date" name="data_req" id="">
            </div>
            <div class="form-row col-md-3">
            
            </div>
            </div>
        <button type="submit" class="btn btn-primary" >Enviar</button>
        <button type="submit" class="btn btn-danger"><a href="/estoque/requisicao"> Cancelar</a></button>

        </div>
        </form>
</div>
@yield('footer')
        
        
            
  