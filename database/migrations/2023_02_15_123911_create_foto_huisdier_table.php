<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoHuisdierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('foto_huisdier')){
            Schema::create('foto_huisdier', function (Blueprint $table) {
                $table->uuid('foto_huisdier_id')->primary();
                $table->uuid('huisdier_id');
                $table->string('titel');
                $table->string('src');
                $table->string('alt');
                $table->text('beschrijving');
                $table->foreign('huisdier_id')->references('huisdier_id')->on('huisdier')->onDelete('cascade');
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
        Schema::table('foto_huisdier', function (Blueprint $table){
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
}
