<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DisciplinaPlanoEstudo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplina_plano_estudo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plano_estudo_id');
            $table->unsignedBigInteger('disciplina_id');
            $table->timestamps();

            $table->foreign('plano_estudo_id')->references('id')->on('plano_estudos');
            $table->foreign('disciplina_id')->references('id')->on('disciplinas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disciplina_plano_estudo');
    }
}
