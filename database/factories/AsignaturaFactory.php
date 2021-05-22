<?php

namespace Database\Factories;

use App\Models\Asignatura;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Profesor;

class AsignaturaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Asignatura::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $profesor=Profesor::all('id');
        return [
            'nombre'=>$this->faker->company(),
            'descripcion'=>$this->faker->text($maxNbChars = 80),
            'creditos'=>$this->faker->randomDigitNot(0),
            'profesor_id'=>$profesor->get(rand(0, count($profesor)-1))
        ];
    }
}
