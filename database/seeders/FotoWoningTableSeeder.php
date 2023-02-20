<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FotoWoningTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foto_woning')->insert([
            // \Ramsey\Uuid\Uuid::uuid4()->toString()
            'foto_woning_id' => '3a722b3b-8c41-4667-b5b4-dd06f061335c', //Nieuwe uuid
            'user_id' => 'daf806de-99b6-4608-ac66-739a3fa9f2c9', //Refereert naar Dennis in usertable
            'titel' => 'Futuristisch huis',
            'src' => 'public\img\FuturistischHuis.jpg',
            'alt' => 'Een Futuristisch huis',
            'beschrijving' => 'Een Futuristisch huis. Je kan hier ook zien dat wij een grote tuin hebben'

        ]);
    }
}
