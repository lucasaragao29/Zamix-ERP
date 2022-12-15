<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoComposto extends Model
{
    protected $table = 'produto_composto';

    protected $fillable = ['quantidade',
    'preco_total',
    'id_produto',
    'nome_prod_comp',
    'categoria',
    'preco_compra',
    'preco_venda'];

    public function produto() 
    {
        
        return $this->belongsTo(Produtos::class, 'id_produto', 'id');
        
    }
   
}
