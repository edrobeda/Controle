<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalaPessoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_sala_pessoa', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->integer('fk_sala')->references('id')->on('tb_sala');
            $table->integer('fk_pessoa')->references('id')->on('tb_pessoa');
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
        Schema::dropIfExists('tb_sala_pessoa');
    }
}
