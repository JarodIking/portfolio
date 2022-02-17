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
        Schema::create('contents', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';

            $table->id();
            $table->foreignId('tabs')->constrained('tabs');
            $table->string('title', 100)->nullable();
            $table->string('sub_title', 100)->nullable();
            $table->longText('description')->nullable();
            $table->string('from', 50)->nullable();
            $table->string('to', 50)->nullable();
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
        Schema::table('contents', function (Blueprint $table) {
            $table->dropForeign(['tabs']);
        });

        Schema::dropIfExists('contents');
    }
}
