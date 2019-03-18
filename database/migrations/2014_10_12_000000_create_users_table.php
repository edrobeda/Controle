<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->comment('A user description');
            $table->string('role')->default('user')->comment('should be user or admin'); 
            $table->string('description')->nullable()->comment('A user description');
            $table->string('image')->nullable()->comment(' for target /upload/users');
            $table->jsonb('options')->nullable()->default(json_encode([]));
            $table->boolean('active')->default(true);
            $table->ipAddress('conected')->nullable()->comment('ip conected');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
