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
        Schema::create('listitems', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';

            $table->id();
            $table->string('text', 50);
            $table->foreignId('contents')->constrained('contents');
            $table->foreignId('icon_id')->constrained('icons');

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
        Schema::table('listitems', function (Blueprint $table) {
            $table->dropForeign(['contents']);
            $table->dropForeign(['icon_id']);
        });

        Schema::dropIfExists('listitems');
    }
}
