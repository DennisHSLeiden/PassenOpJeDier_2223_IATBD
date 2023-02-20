<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('review')){
            Schema::create('review', function (Blueprint $table) {
                $table->uuid('review_id')->primary();
                $table->uuid('user_id');
                $table->uuid('huisdier_id');
                $table->text('review');
                $table->foreign('user_id')->references('user_id')->on('user')->onDelete('cascade');
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
        Schema::table('review', function (Blueprint $table){
            $table->dropForeign(['user_id']);
            $table->dropForeign(['huisdier_id']);
            $table->dropColumn(['user_id','huisdier_id']);
        });
        // Schema::dropIfExists('review');
    }
}
