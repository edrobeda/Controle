<?php

use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pessoa', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('nome');
            $table->char('doc',30)->comment('Uriliza o RG ou CPF.');
            $table->jsonb('email')->nullable();
            $table->jsonb('cellphone')->nullable();
            $table->jsonb('phone')->nullable();
            $table->integer('fk_estado_civil')->references('id')->on('tb_estado_civil');
            $table->integer('fk_tipo_logradouro')->references('id')->on('tb_tipo_logradouro');
            $table->string('logradouro')->nullable();
            $table->integer('numero')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->char('uf', 2)->nullable();
            $table->string('data_nasc')->nullable();
            $table->string('observacoes')->nullable();
            $table->boolean('ativa')->default(true);
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
        Schema::dropIfExists('tb_pessoa');
    }
}
