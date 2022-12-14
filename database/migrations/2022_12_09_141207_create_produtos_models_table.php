<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_prod_prod');
            $table->integer('preco_compra_prod');
            $table->integer('preco_venda_prod');
            $table->string('categoria_prod');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos_models');
    }
}
