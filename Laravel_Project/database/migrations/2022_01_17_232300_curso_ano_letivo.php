<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CursoAnoLetivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ano_letivo_curso', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('curso_id');
            $table->unsignedBigInteger('ano_letivo_id');
            $table->timestamps();

            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
            $table->foreign('ano_letivo_id')->references('id')->on('ano_letivos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ano_letivo_curso');
    }
}
