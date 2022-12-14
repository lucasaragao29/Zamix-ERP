@include('app')
@yield('header')
<div class="container">
    <form action="{{route('destroy_user',['id'=>$usuario->id])}}" method="POST">
        @csrf
        @method('delete')
    <div class="form-row">
        <div class="form-group col-md-6">
            <h4>Desejas Mesmo excluir o Usuario?</h4>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Nome </label>
                    <input type='text' value="{{$usuario->name}}" class="form-control" id="inputPassword4" name='mat'>
                    <br>
                    <button type="submit" class="btn btn-danger ">Sim</button>
                    <button type="submit" class="btn btn-primary">Cancelar</button>

                </div>
            </div>
    </form>
</div>
@yield('footer')