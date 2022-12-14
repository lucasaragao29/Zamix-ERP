@include('app')
@yield('header')

    <div class="container">
        <form>
            @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Matricula do Requerente</label>
                <input type="number" class="form-control" id="inputEmail4" name='id_req'>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nome do Requerente</label>
                <input type="text" class="form-control" id="inputEmail4" name='nome_req'>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nome do Produto</label>
                <input type="name" class="form-control" id="inputEmail4" name='nome_prod'>
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
        
        
            
  