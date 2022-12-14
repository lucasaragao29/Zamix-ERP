@include('app')
@yield('header')
<div class="container">
    <form>
        @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <h2>Periodo do relatorio</h2>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Data Inicial</label>
                <input type='date'  class="form-control" id="inputPassword4" name='date_inicial'>
                 <label for="inputAddress">Data Final</label>
                <input type="date" class="form-control" id="inputAddress" name='data_final'>
            </div>
        </div>
        
    </div>
    <button type="submit" class="btn" style="background-color:green; color:white">Consultar</button>
</form>
</div>
@yield('footer')