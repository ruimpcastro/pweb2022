<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DisciplinaAnoLetivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('ano_letivo_disciplina', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('disciplina_id');
                $table->unsignedBigInteger('ano_letivo_id');
                $table->timestamps();

                $table->foreign('disciplina_id')->references('id')->on('disciplinas');
                $table->foreign('ano_letivo_id')->references('id')->on('ano_letivos');

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
        Schema::drop('ano_letivo_disciplina');
    }
}
