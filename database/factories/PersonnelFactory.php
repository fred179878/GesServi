<?php

namespace Database\Factories;

use App\Models\Personnel;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonnelFactory extends Factory
{
    protected $model = Personnel::class;

    public function definition()
    {
        $servicesIds = Service::pluck('id')->toArray();

        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'adresse' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail,
            'num_mobile' => $this->faker->phoneNumber,
            'date_recrutement' => $this->faker->date,
            'numero_service' => $this->faker->randomElement($servicesIds),
        ];
    }
}
