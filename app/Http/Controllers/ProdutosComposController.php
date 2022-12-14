<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProdutoCompostoModel;
use App\ProdutosModel;
use Illuminate\Console\Scheduling\Event;


class ProdutosComposController extends Controller
{
    public function create()
    {
        

        $produto = ProdutosModel::all();

        return view('components.forms.form_prod_composto', compact('produto'));
    }
    public function store(Request $request)
    {    
        
        ProdutoCompostoModel::create([
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
           $produtos=ProdutoCompostoModel::get();
            return view('tabelas_produtos.tabela_composta',['produto'=>$produtos]);
      
        }
        public function show($id){
            $produtos=ProdutoCompostoModel::get();
            dd($produtos);
        }
        public function edit($id){
            $produtos= ProdutoCompostoModel::FindOrFail($id);
            return view('components.forms.form_prod_composto_edit',['produto'=> $produtos]);
          
        }
        public function update(Request $request,$id){
            $produtos =ProdutoCompostoModel::FindOrFail($id);
    
            $produtos->update([
                'quantidade'=>$request->quantidade,
                'nome_prod_comp'=>$request->nome_prod_comp,
                'categoria'=>$request->categoria,
                'preco_compra'=>$request->preco_compra,
                'preco_venda'=>$request->preco_venda,
                'preco_total'=>$request->preco_total,
                'id_produto'=>$request->id_produto
            ]);
            return redirect()->route('produtos_comp_tabela',['produto'=> $produtos]);
        }
        public function delete($id)
        {
            $produtos= ProdutoCompostoModel::FindOrFail($id);
            return view('tabelas_produtos.tabela_composta',['produto'=> $produtos]);
        }
        public function destroy($id){
            ProdutoCompostoModel::where('id',$id)->delete();
            return redirect()->route('produtos_comp_tabela');
        }


}
