@include('app')
@yield('header')

    <div class="container">
        <form>
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
