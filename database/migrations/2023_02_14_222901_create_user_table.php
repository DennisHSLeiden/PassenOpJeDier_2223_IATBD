<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('users')){
            Schema::create('user', function (Blueprint $table) {
                $table->UUID('user_id')->primary();
                $table->string('voornaam');
                $table->string('tussenvoegsel');
                $table->string('achternaam');
                $table->string('email')->unique();
                $table->string('telefoonnummer')->unique();
                $table->integer('leeftijd');
                $table->string('woonplaats');
                $table->string('straat');
                $table->string('huisnummer');
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
        Schema::dropIfExists('user');
    }
}
