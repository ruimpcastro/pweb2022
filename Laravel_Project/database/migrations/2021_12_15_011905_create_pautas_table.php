<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePautasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pautas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('chave')->unique();
            $table->string('designacao');
            $table->boolean('dirty');
            $table->unsignedBigInteger('resultado_id');
            $table->unsignedBigInteger('disciplina_id');

            $table->foreign('resultado_id')->references('id')->on('resultados');
            $table->foreign('disciplina_id')->references('id')->on('disciplinas')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pautas');
    }
}
