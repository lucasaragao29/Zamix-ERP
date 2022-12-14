<?php

namespace App\Http\Controllers;

use App\ProdutoCompostoModel;
use Illuminate\Http\Request;
use App\ProdutosModel;
use Illuminate\Console\Scheduling\Event;

class ProdutosController extends Controller
{
    public function create(){
        $produtos=ProdutoCompostoModel::all();
        return view('components.forms.forms_prod');
    }

    public function store(Request $request){
        
        ProdutosModel::create([
        'nome_prod_prod'=>$request->nome_prod_prod,
        'categoria_prod'=> $request->categoria_prod,
        'preco_compra_prod'=>$request->preco_compra_prod,
        'preco_venda_prod'=>$request->preco_venda_prod,
        'quantidade_prod'=>$request->quantidade_prod,
        ]);
        return redirect()->route('cadastro_produto');
       
    }
    public function index(){
        $produto=ProdutosModel::get();
        $produtos=ProdutoCompostoModel::get();
        return view('tabelas_produtos.tabela_produto',['produto'=>$produto]);
        
    } 
    public function show($id){
        $produto=ProdutosModel::get();
        dd($produto);
    }
    public function edit($id){
        $produto= ProdutosModel::FindOrFail($id);
        return view('components.forms.form_edit_prod',['produto'=> $produto]);
      
    }
    public function update(Request $request,$id){
        $produto =ProdutosModel::FindOrFail($id);

        $produto->update([
        'nome_prod_prod'=>$request->nome_prod_prod,
        'categoria_prod'=> $request->categoria_prod,
        'preco_compra_prod'=>$request->preco_compra_prod,
        'preco_venda_prod'=>$request->preco_venda_prod,
        'quantidade_prod'=>$request->quantidade_prod,
        ]);
        return redirect()->route('produtos_tabela');
    }
    public function delete($id)
    {
        $produto= ProdutosModel::FindOrFail($id);
        return view('tabelas_produtos.tabela_produto',['produto'=> $produto]);
    }
    public function destroy($id){
        ProdutosModel::where('id',$id)->delete();
        return redirect()->route('produtos_tabela');
    }
}
       
