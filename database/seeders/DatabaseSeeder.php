<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modulo;
use App\Models\Leccion;
use App\Models\Video;
use App\Models\Pregunta;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       /*
        Modulo::factory(15)->create()->each(function($module) {

            $entity = factory(App\Entity::class)->make();

            $address = factory(App\Address::class)->create([
                'entity_id' => $entity
            ]);

            $user->entities()->save($entity);
        });
        */
      Modulo::factory(10)->create();
    }
}
