<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReactieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('reactie')){
            Schema::create('reactie', function (Blueprint $table) {
                $table->uuid('reactie_id')->primary();
                $table->uuid('user_id');
                $table->uuid('huisdier_id');
                $table->text('comment');
                $table->boolean('antwoord')->default(false);
                $table->foreign('user_id')->references('user_id')->on('user');
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
        Schema::table('reactie', function (Blueprint $table){
            $table->dropForeign(['user_id']);
            $table->dropForeign(['huisdier_id']);
            $table->dropColumn(['user_id','huisdier_id']);
        });
        // Schema::dropIfExists('reactie');
    }
}
