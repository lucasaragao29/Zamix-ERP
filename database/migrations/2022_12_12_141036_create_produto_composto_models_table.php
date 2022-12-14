<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoCompostoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_composto_models', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantidade');
            $table->integer('id_produto')->unsigned();
            $table->foreign('id_produto')->references('id')->on('ProdutosModel');
            $table->string('categoria');
            $table->string('preco_total');
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
        Schema::dropIfExists('produto_composto_models');
    }
}
