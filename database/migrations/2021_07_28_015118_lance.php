<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lance', function (Blueprint $table) {
            $table->bigIncrements('id_Lance');
            $table->unsignedBigInteger('Pessoa_Lance');
            $table->unsignedBigInteger('Produto_Lance');
            $table->double('valor_inicial');
            $table->double('valor_final');
            $table->timestamp('hora_lance');
            $table->timestamps();

            $table->foreign('Pessoa_Lance')->references('id_Pessoa')->on('pessoa');
            $table->foreign('Produto_Lance')->references('id_Produto')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lance');
    }
}
