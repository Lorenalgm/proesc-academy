<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosFasesAulasMateriais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos_fases_aulas_materiais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('curso_fase_aula_id');
            $table->foreign('curso_fase_aula_id')->references('id')->on('cursos_fases_aulas');
            $table->string('link');
            $table->string('nome');
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
        Schema::dropIfExists('cursos_fases_aulas_materiais');
    }
}
