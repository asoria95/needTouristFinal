<?php

use Illuminate\Database\Seeder;

class TuristSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=126; $i <=500  ; $i++) {
        factory(App\Models\Personas\ModelTurist::class)->create([
          'id_turista' => $i
        ]);
      }
    }
}
