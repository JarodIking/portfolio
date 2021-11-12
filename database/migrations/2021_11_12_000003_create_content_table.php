<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use illuminate\Database;

class CreateContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';

            $table->id();
            $table->foreignId('tabs')->constrained('tabs');
            $table->foreignId('icons')->constrained('icons');
            $table->string('title', 15);
            $table->string('sub_title', 15)->nullable();
            $table->string('description')->nullable();
            $table->string('from', 15)->nullable();
            $table->string('to', 15)->nullable();
            $table->string('link', 200)->nullable();
            $table->datetime('deleted')->nullable();
            $table->datetime('updated')->nullable();   
            $table->string('list_title', 50)->nullable();
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
        Schema::table('content', function (Blueprint $table) {
            $table->dropForeign(['tabs']);
            $table->dropForeign(['icons']);
        });
        
        Schema::dropIfExists('content');
    }
}
