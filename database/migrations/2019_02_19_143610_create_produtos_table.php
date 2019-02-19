<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id_produto');
            $table->string('codigo',6);
            $table->string('codigo_barra', 20);
            $table->string('nm_img','30');
            $table->string('end_img','255');
            $table->text('descricao');
            $table->double('preco',8,2);
            $table->date('dt_cadastro');
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
        Schema::dropIfExists('produtos');
    }
}
