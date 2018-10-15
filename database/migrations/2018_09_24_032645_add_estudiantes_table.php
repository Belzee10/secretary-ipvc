<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('egresado');
            $table->integer('nomatricula');
            $table->string('ci',11);
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('talla');
            $table->double('peso');
            $table->integer('edad');
            $table->enum('sexo',['femenino','masculino']);
            $table->enum('color_piel', ['blanco', 'negro']);
            $table->string('color_pelo');
            $table->string('color_ojo');
            $table->string('procedencia_social_padre');
            $table->string('procedencia_social_madre');
            $table->text('direccion');
            $table->integer('area_atencion');
            $table->boolean('interno');
            $table->boolean('baja');

            $table->unsignedInteger('grupo_id');
            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');

            $table->unsignedInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');

            $table->unsignedInteger('consejo_popular_id');
            $table->foreign('consejo_popular_id')->references('id')->on('consejos_populares')->onDelete('cascade');

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
        Schema::dropIfExists('estudiantes');
    }
}
