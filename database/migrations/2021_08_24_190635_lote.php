<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lote', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Pessoa_Lote');
            $table->unsignedBigInteger('Produto_Lote');
            $table->decimal('valor_inicial', $precision = 8, $scale = 2);
            $table->decimal('valor_final', $precision = 8, $scale = 2)->nullable();
            $table->timestamp('hora_lance');
            $table->timestamps();

            $table->foreign('Pessoa_Lote')->references('id')->on('pessoa');
            $table->foreign('Produto_Lote')->references('id')->on('produtos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lote');
    }
}
