<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("aluno_id");
            $table->foreign("aluno_id")->references("id")->on("alunos");
            $table->string("plano_estudo_id");
            $table->foreign("plano_estudo_id")->references("id")->on("plano_estudos");
            $table->string("pauta_id");
            $table->foreign("pauta_id")->references("id")->on("pautas");
            $table->bigInteger("codigo");
            $table->string("designacao");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
