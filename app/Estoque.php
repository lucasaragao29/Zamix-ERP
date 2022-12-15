<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
   protected $table='estoque';
   protected $fillable=[
    'id_requisicao',
   'categoria_estoque',
   'data_retirada',
   'nome_produto_estoque',
   'preco_compra_estoque',
   'preco_venda_estoque',
   'quantidade_entrada',
   'quantidade_saida',
   'quantidade_estoque_total'];

   public function produtos(){
    return $this->belongsToMany(ProdutoComposto::class,'nome_produto_estoque','id');
   }
   public function requisicao(){
    return $this->belongsToMany(Requisicao::class,'id_requisicao','id');
   }
   }
