<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunoturmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunoturmas', function (Blueprint $table) {
            $table->bigInteger('aluno_id')->unsigned();
            $table->foreign('aluno_id')
            ->references('id')->on('alunos')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->bigInteger('turma_id')
            ->unsigned()
            ->nullable();
            $table->foreign('turma_id')
            ->references('id')->on('turmas')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            
            $table->timestamps();

            $table->primary('aluno_id', 'turma_id' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunoturmas');
    }
}
