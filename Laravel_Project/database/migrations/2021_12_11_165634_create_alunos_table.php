<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("disciplina_id");
            $table->foreign("disciplina_id")->references("id")->on("disciplina");
            $table->string("pauta_id");
            $table->foreign("pauta_id")->references("id")->on("pauta");
            $table->string("ano_letivo_id");
            $table->foreign("ano_letivo_id")->references("id")->on("ano_letivo");
            $table->bigInteger("num_aluno");
            $table->string("nome");
            $table->integer("matricula");
            $table->boolean("desistente");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
