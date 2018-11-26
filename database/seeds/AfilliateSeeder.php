<?php

use Illuminate\Database\Seeder;

class AfilliateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      for ($i=25; $i <=125  ; $i++) {
        factory(App\Models\Personas\ModelAfilliate::class)->create([
          'id_afiliado' => $i
        ]);
      }



      /*
      App\Models\Afiliados::create([
        'id_afiliado' => '2',
        'direccion' => 'Av. La Lorena',
        'edad' => 23,
        'curriculum' => '/home/curriculum/'
      ]);
      */
    }

}
