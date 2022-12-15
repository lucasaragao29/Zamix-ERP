@include('app')
@yield('header')
<div class="container">
    <form style="margin-top: 2rem;">
        @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <h4>Consultar Requisição</h4>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Matricula do Requisitante</label>
                    <input type='number'  class="form-control" id="inputPassword4" name='mat'>
                    <br>
                    <button type="submit" class="btn btn-primary" style="background-color:green; color:white">Consultar</button>

                </div>
            </div>
    </form>
</div>
@yield('footer')
        