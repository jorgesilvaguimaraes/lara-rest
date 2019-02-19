<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoNumeracaoQuantidadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_numeracao_quantidade', function (Blueprint $table) {
            $table->increments('id_produto_numeracao_quantidade');
            $table->integer('id_produto');
            $table->integer('id_numeracao');
            $table->integer('quantidade');
            $table->timestamps();

            $table->foreign('id_produto')->references('id_produto')->on('produtos');
            $table->foreign('id_numeracao')->references('id_numeracao')->on('numeracoes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_numeracao_quantidade');
    }
}
