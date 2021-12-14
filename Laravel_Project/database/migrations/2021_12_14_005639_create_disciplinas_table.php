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
            $table->bigInteger('codigo')->unique();
            $table->string('designacao')->unique();
            $table->integer('semestre');
            $table->unsignedBigInteger('plano_estudo_id');
            $table->timestamps();

            $table->foreign('plano_estudo_id')->references('id')->on('plano_estudos');
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
