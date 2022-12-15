@include('app')
@include('components.forms.delete_alert_prod')
@yield('header')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="container">
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;); margin-top:1rem;" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Inicio</a></li>
      <li class="breadcrumb-item"><a href="/estoque">Estoque</a></li>
      <li class="breadcrumb-item"><a href="/estoque/consulta">Consulta de Estoque</a></li>
      <li class="breadcrumb-item active" aria-current="page">Produto Simples</li>
    </ol>
  </nav>
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
            <td>{{$produto->nome_prod_prod}}</td>
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

            <td><a href='/estoque/produtos_simples/editar/{{$produto->id}}'> <button type="submit" class='btn btn-primary'><i class="fa-solid fa-pen"></i>Editar</button></a></td>
            <form action="{{route('produtos_destroy_simples',['id'=>$produto->id])}}" method="post">
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