@include('app')
@yield('header')
<div class="container">
    <form action="{{route('user_update',['id'=>$usuario->id])}}" method="post">
      @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nome</label>
            <input type="text" class="form-control" name='name' value="{{$usuario->name}}" id="inputEmail4" placeholder="Nome">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">E-mail</label>
            <input type="email" class="form-control" name='email' value={{$usuario->email}} id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Senha</label>
            <input type="password" class="form-control" name='senha' value='{{$usuario->senha}}' id="inputPassword4" placeholder="Senha">
          </div>
        </div>
        <div class="form-group">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>       
        <button type="submit" class="btn btn-danger"><a href="/deletar_usuario/{{$usuario->id}}"> Deletar Usuario</a></button>
      </div>
      </form>
      </div>
  </form>

</div>
@yield('footer')     
               @csrf
      
     
          
          
          