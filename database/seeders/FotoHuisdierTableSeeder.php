<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FotoHuisdierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foto_huisdier')->insert([
            'foto_huisdier_id' => '90653392-b126-11ed-afa1-0242ac120002', //nieuwe uuid
            'huisdier_id' => 'a2a55bd0-ad2b-11ed-afa1-0242ac120002', //Refereert naar Otso in HuisdierTableSeeder
            'titel' => 'Otso',
            'src' => 'public\img\Otso.jpg',
            'alt' => 'Een foto van Otso',
            'beschrijving' => 'Hier kan je een foto van een slapende Otso zien op een bank met een dekentje'
        ]);
    }
}
