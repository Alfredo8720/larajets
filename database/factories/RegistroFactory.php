<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Registro;

class RegistroFactory extends Factory
{

    protected $model = Registro::Class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=> $this->faker->name(),
            'a_paterno'=>$this->faker->lastname(),
            'a_materno'=>$this->faker->lastname(),
            'curp'=>$this->faker->sentence(),
            'n_contacto'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->safeEmail(),
        ];
    }
}
