<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAanvraagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('aanvraag')){
            Schema::create('aanvraag', function (Blueprint $table) {
                $table->uuid('aanvraag_id')->primary();
                $table->uuid('huisdier_id');
                $table->text('wanneer');
                $table->integer('prijs');
                $table->text('extra_informatie');
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
        Schema::table('aanvraag', function (Blueprint $table){
            $table->dropForeign(['huisdier_id']);
            $table->dropColumn('huisdier_id');
        });
        // Schema::dropIfExists('aanvraag');
    }
}
