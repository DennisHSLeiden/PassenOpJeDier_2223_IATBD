<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ReactieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reactie')->insert([
            'reactie_id' => 'b5e847d2-ad32-11ed-afa1-0242ac120002', //nieuwe uuid
            'user_id' => 'daf806de-99b6-4608-ac66-739a3fa9f2c9', //Refereert naar Dino in UserTableSeeder
            'aanvraag_id' => 'b21b8192-ad31-11ed-afa1-0242ac120002', //Refereert naar Otso's aanvraag in AanvraagTableSeeder
            'comment' => 'Hoi! ik ben geintereseerd in het hondzitten van Otso, laat maar weten, groetjes',
        ]);
    }
}
