<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_produto', function (Blueprint $table) {
            $table->increments('id_categoria_produto');
            $table->integer('id_categoria');
            $table->integer('id_produto');
            $table->timestamps();

            $table->foreign('id_categoria')->references('id_categoria')->on('categorias');
            $table->foreign('id_produto')->references('id_produto')->on('produtos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_produto');
    }
}
