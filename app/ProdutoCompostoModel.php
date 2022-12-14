<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoCompostoModel extends Model
{
    protected $table = 'produto_composto_models';

    protected $fillable = ['quantidade','preco_total','id_produto','nome_prod_comp'];

    public function produto() 
    {
        
        return $this->belongsTo(ProdutosModel::class, 'id_produto', 'id');
        
    }
   
}
