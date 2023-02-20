<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review')->insert([
            'review_id' => '671399d0-b12a-11ed-afa1-0242ac120002', //nieuwe uuid
            'user_id' => '51b668f8-ad31-11ed-afa1-0242ac120002', //Refereert naar Dino in usertable
            'huisdier_id' => 'a2a55bd0-ad2b-11ed-afa1-0242ac120002',  //Refereert naar Otso in HuisdierTableSeeder
            'review' => 'Ik heb nu 2 keer op Otso op mogen passen, en ik zeg je eerlijk, het is een fantastische hond. Heel speels als je het wilt, trekt niet aan de lijn met uitlaten, doet zijn business buiten, makkelijk te voederen, en heel rustig'
        ]);
    }
}
