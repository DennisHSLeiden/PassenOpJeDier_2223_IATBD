<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoWoningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('foto_woning')){
            Schema::create('foto_woning', function (Blueprint $table) {
                $table->uuid('foto_woning_id')->primary();
                $table->uuid('user_id');
                $table->string('titel');
                $table->string('src');
                $table->string('alt');
                $table->text('beschrijving');
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
        Schema::table('foto_woning', function (Blueprint $table){
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });

        // Schema::dropIfExists('foto');
    }
}
