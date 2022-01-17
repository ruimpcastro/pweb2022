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
            $table->longText('plano');
            $table->integer('ano');

            $table->unsignedBigInteger('ano_letivo_id')->nullable();

            $table->foreign('ano_letivo_id')->references('id')->on('ano_letivos');
            $table->timestamps();

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
