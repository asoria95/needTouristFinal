<?php

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
        $this->call(PersonsSeeder::class);
        $this->call(AfilliateSeeder::class);
        $this->call(AdministratorSeeder::class);
        $this->call(TuristSeeder::class);
    }
}
