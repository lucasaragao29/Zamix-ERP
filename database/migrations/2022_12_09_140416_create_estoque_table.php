<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstoqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoque', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_produto_estoque');
            $table->integer('preco_compra_estoque');
            $table->integer('preco_venda_estoque');
            $table->integer('categoria_estoque');
            $table->integer('quantidade_estoque_total');
            $table->integer('quantidade_entrada');
            $table->integer('quantidade_saida');
            $table->date('data_retirada');
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
        Schema::dropIfExists('estoque');
    }
}

        