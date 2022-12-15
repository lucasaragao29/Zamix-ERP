@include('app')
@yield('header')
<div class="container">
    <form action="{{route('produtos_update_simples',['id'=>$produto->id])}}" method="POST" style="margin-top: 2rem;">
      @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nome do Produto</label>
            <input type="text" class="form-control" value="{{$produto->nome_prod_prod}}" name='nome_prod_prod'>
          </div>
          <div class="form-group col-md-6">
            <label for="">Categoria</label>
            <select  class="form-control" name="categoria_prod">
              <option selected>{{$produto->categoria_prod}}</option>
              <option value="Unitario">Unitario</option>
              <option value="Composto">Composto</option>
            </select>
            
          </div>
        </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">Preço de Custo</label>
            <input type="number" class="form-control" value="{{$produto->preco_compra_prod}}" name="preco_compra_prod">
            <label for="">Preço de Venda</label>
            <input type="text" class="form-control" value="{{$produto->preco_venda_prod}}" name="preco_venda_prod" id="" >
          </div>
        <button type="submit" class="btn btn-primary">Editar</button>
        <button type="submit" class="btn btn-danger"><a href="/estoque/produtos/{{$produto->id}}"> Cancelar</a></button>
      </form>
</div>
@yield('footer')