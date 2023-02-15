<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuisdierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('huisdier')){
            Schema::create('huisdier', function (Blueprint $table) {
                $table->UUID('huisdier_id')->primary();
                $table->UUID('user_id');
                $table->string('naam');
                $table->string('soort');
                $table->text('generieke_informatie');
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
        Schema::table('huisdier', function (Blueprint $table){
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
        // Schema::dropIfExists('huisdier');
    }
}
