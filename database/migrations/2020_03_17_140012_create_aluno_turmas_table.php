<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunoTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_turmas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigIncrements('aluno_id');
            $table->unsignedBigIncrements('turma_id');
            $table->timestamps();

            $table->foreign('aluno_id')
            ->references('id')
            ->on('alunos')
            ->onDelete('no action')
            ->onUpdate('no action');

            $table->foreign('turma_id')
            ->references('id')
            ->on('turmas')
            ->onDelete('no action')
            ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno_turmas');
    }
}
