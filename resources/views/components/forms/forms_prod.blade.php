@include('app')
@yield('header')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;); margin-top:1rem;" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Inicio</a></li>
              <li class="breadcrumb-item"><a href="/estoque">Estoque</a></li>
              <li class="breadcrumb-item"><a href="/estoque/cadastro_produtos">Cadastro de Produto</a></li>
              <li class="breadcrumb-item active" aria-current="page">Produto Simples</li>
            </ol>
          </nav>
    <form action="{{route('cadastro_produto_simples')}}" method="POST" style="margin-top: 2rem;">
      @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nome do Produto</label>
            <input type="text" class="form-control" name='nome_prod_prod' placeholder="Nome do Produto">
          </div>
          <div class="form-group col-md-6">
            <label for="">Categoria</label>
            <select  class="form-control" name="categoria_prod">
              <option value="Unitario" selected>Unitario</option>
              <label for="">Produtos do</label>
            </select>
              
            
          </div>
        </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">Preço de Compra</label>
            <input type="text" class="form-control" data-mask="R$ 00,00" data-mask-selectonfocus="true" placeholder="R$: XX,XX" id='preco_custo' name="preco_compra_prod">
            <label for="">Preço de Venda</label>
            <input type="text" class="form-control" data-mask="R$ 00,00" data-mask-selectonfocus="true" name="preco_venda_prod" id="preco_venda" placeholder="R$: XX,XX">
          </div>
        <div class="form-group">
          <label>Quantidade</label>
          <input type="number" class="form-control"placeholder="Quantidade" name="quantidade_produto_prod">
        </div>
        <div class="form-group">
          <button type="submit" id='cadastro_produto'class="btn btn-primary">Enviar</button>
        </div>

        
        
      </form>
</div>
<script>
  const delete_btn=document.querySelector('#cadastro_produto');
  delete_btn.addEventListener('click',function(){
    Swal.fire('Adicionado com Sucesso', '', 'success');
  });
  $(document).ready(function(){
      $('#preco_custo').mask('R$ 00,00');
      $('#preco_venda').mask('R$ 00,00');
      });
      
</script>
@yield('footer')