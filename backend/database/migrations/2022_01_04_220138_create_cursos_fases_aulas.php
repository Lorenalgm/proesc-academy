<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosFasesAulas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos_fases_aulas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('curso_fase_id');
            $table->foreign('curso_fase_id')->references('id')->on('cursos_fases');
            $table->string('nome');
            $table->string('descricao')->nullable();
            $table->string('link')->nullable();
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
        Schema::dropIfExists('cursos_fases_aulas');
    }
}
