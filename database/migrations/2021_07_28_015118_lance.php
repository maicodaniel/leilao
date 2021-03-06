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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Pessoa_Lance');
            $table->unsignedBigInteger('Produto_Lance');
            $table->decimal('valor_inicial', $precision = 8, $scale = 2);
            $table->decimal('valor_final', $precision = 8, $scale = 2);
            $table->timestamp('hora_lance');
            $table->timestamps();

            $table->foreign('Pessoa_Lance')->references('id')->on('pessoa');
            $table->foreign('Produto_Lance')->references('id')->on('produtos');
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
