<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition()
    {
        return [
            'numero_service' => $this->faker->unique()->randomNumber(),
            'nombre_employe' => $this->faker->numberBetween(5, 20),
            'nom_service' => $this->faker->word,
        ];
    }
}



