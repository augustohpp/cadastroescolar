<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('sexo');
            $table->string('data_Nascimento');
            $table->string('tel')->nullable();
            $table->string('tel2')->nullable();
            $table->string('email')->unique();
            $table->bigInteger('turma_id')
                ->unsigned()
                ->nullable();
            $table->foreign('turma_id')
                ->references('id')->on('turmas')
                ->onDelete('set null')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('alunos');
    }
}
