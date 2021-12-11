<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePautasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pautas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("aluno_id");
            $table->foreign("aluno_id")->references("id")->on("aluno");
            $table->string("avaliacao_id");
            $table->foreign("avaliacao_id")->references("id")->on("avaliacao");
            $table->string("curso_id");
            $table->foreign("curso_id")->references("id")->on("curso");
            $table->bigInteger("codigo");
            $table->boolean("dirty");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pautas');
    }
}
