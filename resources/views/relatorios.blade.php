@include('app')
@yield('header')
<div class="container">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;); margin-top:1rem;" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Inicio</a></li>
          <li class="breadcrumb-item"><a href="/estoque">Estoque</a></li>>
          <li class="breadcrumb-item active" aria-current="page">Relatorios</li>
        </ol>
      </nav>
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