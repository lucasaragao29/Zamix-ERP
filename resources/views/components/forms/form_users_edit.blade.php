@include('app')
@yield('header')
<div class="container">
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;); margin-top:1rem;" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Inicio</a></li>
      <li class="breadcrumb-item active" aria-current="page">Editar Usuário</li>
    </ol>
  </nav>
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
      
     
          
          
          