<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacaos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("disciplina_id");
            $table->foreign("disciplina_id")->references("id")->on("disciplina");
            $table->string("pauta_id");
            $table->foreign("pauta_id")->references("id")->on("pauta");
            $table->string("ano_letivo_id");
            $table->foreign("ano_letivo_id")->references("id")->on("ano_letivo");
            $table->string("designacao");
            $table->decimal("classificacao_aluno");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaliacaos');
    }
}
