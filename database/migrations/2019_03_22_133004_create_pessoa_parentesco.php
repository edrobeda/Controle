<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaParentesco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pessoa_parentesco', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->integer('fk_pessoa')->references('id')->on('tb_pessoa');
            $table->integer('fk_parentesco')->references('id')->on('tb_parentesco');
            $table->integer('fk_pessoa_parentesco')->references('id')->on('tb_pessoa');
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
        Schema::dropIfExists('tb_pessoa_parentesco');
    }
}
