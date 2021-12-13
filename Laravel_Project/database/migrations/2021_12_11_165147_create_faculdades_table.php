<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaculdadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculdades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("curso_id");
            $table->foreign("curso_id")->references("id")->on("cursos");
            $table->string("designacao");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculdades');
    }
}
