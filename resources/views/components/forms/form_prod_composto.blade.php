@include('app')
@yield('header')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="container">
    <form action="{{route('cadastro_composto')}}" method="POST">
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
                <select name="categoria_comp" class='form-control' id="">
                  <option value="composto">Composto</option>
                </select>
              </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Produtos</label>
            <select name=""class='form-control' id="id_produto">
                <option value="" selected hidden>Selecionar</option>
                @foreach ($produto as $produto)
                  <option value="{{ $produto->id }}">{{ $produto->nome_prod_prod }}</option>
                @endforeach
            </select>
          </div>
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Preço de Custo</label>
            <input type="number" class="form-control" id='preco_custo' name="preco_compra_prod">
            <label for="">Preço de Venda</label>
            <input type="text" class="form-control" data-mask="R$ 00,00" data-mask-selectonfocus="true" name="preco_venda_prod" id="preco_venda" placeholder="R$: XX,XX">
            <label for="">Preço Total</label>
            <input type="text" class="form-control" data-mask="R$ 00,00"  data-mask-selectonfocus="true" name="preco_total" id="preco_venda" placeholder="R$: XX,XX">
          </div>
          <button type="submit" id='cadastro_produto'class="btn btn-primary">Enviar</button>
          <button type="submit" id='cancelar_cadastro'class="btn btn-danger">Cancelar</button>
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
            
            