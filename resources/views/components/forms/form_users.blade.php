@include('app')
@yield('header')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="container">
    <form action="{{route('novo_usuario')}}" method="POST">
      @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nome</label>
            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
          @endif
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">{{ __('E-Mail') }}</label>
            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name='email' id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">{{ __('Senha') }}</label>
            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required" name='senha' id="inputPassword4" placeholder="Senha">
            @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group col-md-6">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme a senha') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>
        </div>
        <div class="form-group">
        </div>
        <button type="submit" id='cadastro_usuario' class="btn btn-primary">{{ __('Cadastrar') }}</button>
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
              
          
          
          