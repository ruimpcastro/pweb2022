<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanoEstudosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plano_estudos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("curso_id");
            $table->foreign("curso_id")->references("id")->on("curso");
            $table->string("disciplina_id");
            $table->foreign("disciplina_id")->references("id")->on("disciplina");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plano__estudos');
    }
}
