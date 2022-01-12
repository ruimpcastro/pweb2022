<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlunoResultado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('aluno_resultado', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('aluno_id');
                $table->unsignedBigInteger('resultado_id')->nullable();
                $table->timestamps();

                $table->foreign('aluno_id')->references('id')->on('alunos');
                $table->foreign('resultado_id')->references('id')->on('resultados');

            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('aluno_resultado');
    }
}
