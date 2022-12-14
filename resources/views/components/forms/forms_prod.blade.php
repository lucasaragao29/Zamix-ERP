@include('app')
@yield('header')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="container">
    <form action="{{route('cadastro_produto_simples')}}" method="POST">
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
          <button type="submit" class="btn btn-danger"><a href="/estoque/"> Cancelar</a></button>
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