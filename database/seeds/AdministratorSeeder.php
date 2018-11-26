<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=1; $i <25  ; $i++) {
        factory(App\Models\Personas\ModelAdministrator::class)->create([
          'id_administrador' => $i
        ]);
      }
    }
}
