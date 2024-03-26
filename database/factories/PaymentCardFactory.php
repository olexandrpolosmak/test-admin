<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentCard>
 */
class PaymentCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'card_number' => $this->faker->creditCardNumber,
            'card_holder' => $this->faker->name,
            'expiration_date' => $this->faker->creditCardExpirationDate,
            'cvv' => $this->faker->randomNumber(3),
            'brand' => $this->faker->creditCardType,
            'last_four' => substr($this->faker->creditCardNumber, -4),
        ];
    }
}
