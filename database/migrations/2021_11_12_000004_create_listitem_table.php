<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListitemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listitem', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';

            $table->id();
            $table->string('text', 50);
            $table->foreignId('content')->constrained('content');
            $table->foreignId('icon')->constrained('icons');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //drop foreign key
        Schema::table('listitem', function (Blueprint $table) {
            $table->dropForeign(['content']);
            $table->dropForeign(['icon']);
        });
        
        Schema::dropIfExists('listitem');
    }
}
