<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Traits\UUID;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'user_id' => 'daf806de-99b6-4608-ac66-739a3fa9f2c9', //Nieuwe uuid
            'voornaam' => 'Dennis',
            'achternaam' => 'Leyting',  
            'email' => 'dennisleyting@gmail.com', 
            'telefoonnummer' => '0637425868', 
            'leeftijd' => '20', 
            'woonplaats' => 'Delft', 
            'straat' => 'Keverling Buismanweg', 
            'huisnummer' => '38'
        ]);
        DB::table('user')->insert([
            'user_id' => '51b668f8-ad31-11ed-afa1-0242ac120002', //Nieuwe uuid
            'voornaam' => 'Dino',
            'achternaam' => 'Saur',  
            'email' => 'dinosaur@gmail.com', 
            'telefoonnummer' => '0612345678', 
            'leeftijd' => '35', 
            'woonplaats' => 'Jura', 
            'straat' => 'BosGrot', 
            'huisnummer' => '6'
        ]);
    }
}
