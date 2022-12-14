@include('app')
@include('components.forms.delete_alert_prod')
@yield('header')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome do Produto Composto</th>
        <th scope="col">Preço Custo</th>
        <th scope="col">Preço Venda</th>
        <th scope="col">Categoria</th>
        <th scopre="col">Preço Total</th>
        <th scopr="col-2">Funções</th>
        
        
      </tr>
    </thead>
    <tbody>
      @foreach ($produto as $produto )
         <tr>
            <td>{{$produto->id}}</td>
            <td>{{$produto->nome_prod_comp}}</td>
            <td data-mask="R$ 00,00" data-mask-selectonfocus="true">{{$produto->preco_compra_prod}}</td>
            <td data-mask="R$ 00,00" data-mask-selectonfocus="true">{{$produto->preco_venda_prod}}</td>
            <td>{{$produto->categoria_prod}}</td>
        
            @php
              if ($produto->categoria_prod === "Composto"){
              echo "<td>preco total</td>";
            }else{
              echo "<td> ----- </td>";
            }
            @endphp

            <td><a href='/estoque/produtos_compostos/editar/{{$produto->id}}'> <button type="submit" class='btn btn-primary'><i class="fa-solid fa-pen"></i>Editar</button></a></td>
            <form action="{{route('produtos_destroy_comp',['id'=>$produto->id])}}" method="post">
              @csrf
              @method('delete')
              <td>
                <button  type="submit" id='excluir_prod_prod' class='btn btn-danger' ><i class="fa-solid fa-trash-xmark"></i>Excluir</button></td>
            </form>
            
          </tr>
          @endforeach
    </tbody>
    
  
  
</div>
<script>
  const delete_btn=document.querySelector('#excluir_prod_prod');
  delete_btn.addEventListener('click',function(){
    Swal.fire({
    title: 'Desejas Excluir o produto?',
    showDenyButton: true,
    showCancelButton: true,
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      Swal.fire('Saved!', '', 'success')
    } else if (result.isDenied) {
      Swal.fire('Changes are not saved', '', 'info')
    }
  })
  });
</script>
@yield('footer');