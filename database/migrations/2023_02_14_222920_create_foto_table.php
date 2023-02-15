<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('foto')){
            Schema::create('foto', function (Blueprint $table) {
                $table->UUID('foto_id')->primary();
                $table->UUID('user_id');
                $table->string('titel');
                $table->string('src');
                $table->string('alt');
                $table->text('description');
                $table->foreign('user_id')->references('user_id')->on('user')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('foto', function (Blueprint $table){
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });

        // Schema::dropIfExists('foto');
    }
}
