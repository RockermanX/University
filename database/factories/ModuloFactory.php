<?php

namespace Database\Factories;

use App\Models\Modulo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModuloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Modulo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'modulo' => $this->faker->word,
            'estado' => 1,
            /*'created_at' =>now(),
            'updated_at'=>NULL */

        ];
    }
}
