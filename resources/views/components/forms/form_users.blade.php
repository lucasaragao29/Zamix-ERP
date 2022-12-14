@include('app')
@yield('header')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="container">
    <form action="{{route('novo_usuario')}}" method="POST">
      @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nome</label>
            <input type="text" class="form-control" name='name' id="inputEmail4" placeholder="Nome">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">E-mail</label>
            <input type="email" class="form-control" name='email' id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Senha</label>
            <input type="password" class="form-control" name='senha' id="inputPassword4" placeholder="Senha">
          </div>
        </div>
        <div class="form-group">
        </div>
        <button type="submit" id='cadastro_usuario' class="btn btn-primary">Cadastrar</button>
      </form>
</div>
<script>
  const delete_btn=document.querySelector('#cadastro_usuario');
  delete_btn.addEventListener('click',function(){
    Swal.fire('Cadastrado com sucesso!!!', '', 'success');
  });

    $(document).ready(function(){
      $('#preco_custo').mask('R$ 00,00');
      $('#preco_venda').mask('R$ 00,00');
      });
</script>
@yield('footer')     
              
          
          
          