<?php

namespace App\Http\Controllers;

use App\ProdutoComposto;
use Illuminate\Http\Request;
use App\Produtos;
use Illuminate\Console\Scheduling\Event;

class ProdutosController extends Controller
{
    public function create(){
        $produtos=Produtos::all();
        return view('components.forms.forms_prod');
    }

    public function store(Request $request){
        
        Produtos::create([
        'nome_prod_prod'=>$request->nome_prod_prod,
        'categoria_prod'=> $request->categoria_prod,
        'preco_compra_prod'=>$request->preco_compra_prod,
        'preco_venda_prod'=>$request->preco_venda_prod,
        'quantidade_prod'=>$request->quantidade_prod,
        ]);
        return redirect()->route('estoque');
       
    }
    public function index(){
        $produto=Produtos::get();
        return view('tabelas_produtos.tabela_produto',['produto'=>$produto]);
        
    } 
    public function show($id){
        $produto=Produtos::get();
        dd($produto);
    }
    public function edit($id){
        $produto= Produtos::FindOrFail($id);
        return view('components.forms.form_edit_prod',['produto'=> $produto]);
      
    }
    public function update(Request $request,$id){
        $produto =Produtos::FindOrFail($id);

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
        $produto= Produtos::FindOrFail($id);
        return view('tabelas_produtos.tabela_produto',['produto'=> $produto]);
    }
    public function destroy($id){
        Produtos::where('id',$id)->delete();
        return redirect()->route('produtos_tabela');
    }
}
       
