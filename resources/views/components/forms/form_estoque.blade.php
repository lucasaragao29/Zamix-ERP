@include('app')
@yield('header')

    <div class="container">
        <form>
            @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nome do Produto</label>
                <input type="text" class="form-control" id="inputEmail4" name='prod_nome'>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Preço de Custo</label>
                <input type='text' class="form-control" id="inputPassword4" name='preco_custo'>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Quantidade</label>
            <input type="number" class="form-control" id="inputAddress" name='quant'>
        </div>
        <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputState">Categoria do Produto</label>
            <select id="inputState" class="form-control">
                <option selected></option>
                <option>Simples</option>
                <option>Composta</option>
            </select>
        </div>
        </div>
        <button type="submit" class="btn btn-primary" ">Cadastrar</button>
        <button type="submit" class="btn btn-danger"><a href="/estoque"> Cancelar</a></button>

  </form>
</div>
@yield('footer')
