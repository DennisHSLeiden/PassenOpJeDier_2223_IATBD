<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserTableSeeder::class,
            FotoWoningTableSeeder::class,
            HuisdierTableSeeder::class,
            FotoHuisdierTableSeeder::class,
            AanvraagTableSeeder::class,
            ReactieTableSeeder::class,
            ReviewTableSeeder::class
        ]);
    }
}
