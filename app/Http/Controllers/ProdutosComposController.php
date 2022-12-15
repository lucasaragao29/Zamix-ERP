<?php

namespace App\Http\Controllers;

use App\ProdutoComposto;
use Illuminate\Http\Request;

use App\Produtos;
use Illuminate\Console\Scheduling\Event;


class ProdutosComposController extends Controller
{
    public function create()
    {
        

        $produto = Produtos::all();
        return view('components.forms.form_prod_composto', compact('produto'));
    }
    public function store(Request $request)
    {    
        
       ProdutoComposto::create([
            'quantidade'=>$request->quantidade,
            'nome_prod_comp'=>$request->nome_prod_comp,
            'categoria'=>$request->categoria,
            'preco_compra'=>$request->preco_compra,
            'preco_venda'=>$request->preco_venda,
            'preco_total'=>$request->preco_total,
            'id_produto'=>$request->id_produto
        ]);
        return view('components.forms.form_prod_composto');
       
    }
        public function index(){
           $produtos=ProdutoComposto::get();
            return view('tabelas_produtos.tabela_composta',['produtos'=>$produtos]);
      
        }
        public function show($id){
            $produtos=ProdutoComposto::get();
            dd($produtos);
        }
        public function edit($id){
            $produtos= ProdutoComposto::FindOrFail($id);  
            return view('components.forms.form_prod_composto_edit',['produtos'=> $produtos]);
          
        }
        public function update(Request $request,$id){
            $produtos =ProdutoComposto::FindOrFail($id);
            $produtos->update([
                'quantidade'=>$request->quantidade,
                'nome_prod_comp'=>$request->nome_prod_comp,
                'categoria'=>$request->categoria,
                'preco_compra'=>$request->preco_compra,
                'preco_venda'=>$request->preco_venda,
                'preco_total'=>$request->preco_total,
                'id_produto'=>$request->id_produto
            ]);
            return redirect()->route('produtos_comp_edit',['produtos'=> $produtos]);
        }
        public function delete($id)
        {
            $produtos= ProdutoComposto::FindOrFail($id);
            return view('tabelas_produtos.tabela_composta',['produtos'=> $produtos]);
        }
        public function destroy($id){
            ProdutoComposto::where('id',$id)->delete();
            return redirect()->route('produtos_comp_tabela');
        }


}
