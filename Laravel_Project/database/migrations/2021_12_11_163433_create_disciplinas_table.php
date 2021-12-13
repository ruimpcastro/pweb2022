<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplinas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("pauta_id");
            $table->foreign("pauta_id")->references("id")->on("pautas");
            $table->string("ano_letivo_id");
            $table->foreign("ano_letivo_id")->references("id")->on("ano_letivos");
            $table->bigInteger("codigo");
            $table->string("designacao");
            $table->integer("semestre");
            $table->string("plano");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disciplinas');
    }
}
