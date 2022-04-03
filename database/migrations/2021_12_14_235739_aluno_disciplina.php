<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlunoDisciplina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_disciplina', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aluno_id');
            $table->unsignedBigInteger('disciplina_id');
            $table->timestamps();

            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
            $table->foreign('disciplina_id')->references('id')->on('disciplinas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno_disciplina');
    }
}
