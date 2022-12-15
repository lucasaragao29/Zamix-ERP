<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table='produtos';
    protected $fillable=['nome_prod_prod','preco_compra_prod','preco_venda_prod','quantidade_produto_prod','categoria_prod'];
}
