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
            $table->bigInteger('codigo')->unique();
            $table->string('designacao')->unique();
            $table->unsignedBigInteger('ano_letivo_id')->nullable();
            $table->timestamps();

            $table->foreign('ano_letivo_id')->references('id')->on('ano_letivos');

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
