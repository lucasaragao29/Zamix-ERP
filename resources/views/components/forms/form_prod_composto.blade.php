@include('app')
@yield('header')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11">,
</script>
<div class="container">
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;); margin-top:1rem;" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Inicio</a></li>
              <li class="breadcrumb-item"><a href="/estoque">Estoque</a></li>
              <li class="breadcrumb-item"><a href="/estoque/cadastro_produtos">Cadastro de Produto</a></li>
              <li class="breadcrumb-item active" aria-current="page">Produto Composto</li>
            </ol>
          </nav>
    <form action="{{route('cadastro_composto')}}" method="POST" style="margin-top: 2rem;">
      @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nome do Produto</label>
                <input type="text" class="form-control" name='nome_prod_comp' placeholder="Nome Produto">
              </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Quantidade</label>
                <input type="number" class="form-control" name='quantidade' placeholder="Quantidade">
              </div>
              <div class="form-group col-md4">
                <label for="">Categoria</label>
                <select name="categoria" class='form-control' id="">
                  <option value="composto">Composto</option>
                </select>
              </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Produtos</label>
            <select name="id_produto" class='form-control' id="id_produto">
                <option value="" selected hidden>Selecionar</option>
                @foreach ($produto as $produto)
                  <option value="{{ $produto->id }}">{{ $produto->nome_prod_prod }}</option>
                @endforeach
            </select>
          </div>
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Preço de Custo</label>
            <input type="text" class="form-control money" id='preco_custo' name="preco_compra">
            <label for="">Preço de Venda</label>
            <input type="text" class="form-control money" data-mask="R$ 00,00" data-mask-selectonfocus="true" name="preco_venda" id="money" placeholder="R$: XX,XX">
            <label for="">Preço Total</label>
            <input type="text" class="form-control" data-mask="R$ 00,00"  data-mask-selectonfocus="true" name="preco_total" id="money" placeholder="R$: XX,XX">
          </div>
          <button type="submit" id='cadastro_produto'class="btn btn-primary">Enviar</button>
    </form>
</div>
         
      
<script>
  const delete_btn=document.querySelector('#cadastro_produto');
  delete_btn.addEventListener('click',function(){
    Swal.fire('Adicionado com Sucesso', '', 'success');
  });

</script>
@yield('footer')
            
            