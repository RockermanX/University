<?php

namespace Database\Factories;

use App\Models\Leccion;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeccionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Leccion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'leccion' => $this->faker->text(10),
            'estado' => rand(0,1),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime()

        ];
    }
}
