<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HuisdierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('huisdier')->insert([
            'huisdier_id' => 'a2a55bd0-ad2b-11ed-afa1-0242ac120002', //nieuwe uuid
            'user_id' => 'daf806de-99b6-4608-ac66-739a3fa9f2c9', //Refereert naar Dennis in usertable
            'naam' => 'Otso',
            'soort' => 'Honestly dont know',
            'generieke_informatie' => 'Otso eet 3 maaltijden per dag, allemaal uit dezlfde zak, en drinkt 3 Liter water'
        ]);
    }
}
