<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'status' => Company::STATUS_ACTIVE,
            'data' => [
                'logo' => $this->faker->imageUrl(),
                'description' => $this->faker->text,
                'ownerName' => $this->faker->name,
                'ownerPhone' => $this->faker->phoneNumber,
            ],

        ];
    }
}
