<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnoLetivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ano_letivos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->year('ano');
            $table->unsignedBigInteger('disciplina_id');

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
        Schema::dropIfExists('ano_letivos');
    }
}
