<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->decimal('avaliacao');
            $table->boolean('presenca');
            $table->unsignedBigInteger('disciplina_id');
            $table->unsignedBigInteger('aluno_id')->nullable();
            $table->unsignedBigInteger('pauta_id')->nullable();

            $table->foreign('disciplina_id')->references('id')->on('disciplinas');
            $table->foreign('aluno_id')->references('id')->on('alunos');
            $table->foreign('pauta_id')->references('id')->on('pautas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultados');
    }
}
