<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';

            $table->id()->autoIncrement();
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('username', 20);
            $table->string('password', 500);
            $table->string('email', 100);
            $table->boolean('level')->default(0);
            $table->boolean('active')->default(0);
            $table->string('fontawesome_kit', 200);
            $table->datetime('deleted')->nullable();
            $table->datetime('updated')->nullable();   
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
