<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSala extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_sala', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('nome');
            $table->string('descricao');
            $table->integer('fk_nucleo')->references('id')->on('tb_nucleos');
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
        Schema::dropIfExists('tb_sala');
    }
}
