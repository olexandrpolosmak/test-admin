<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'status' => $this->faker->randomElement([
                Item::STATUS_ACTIVE,
                Item::STATUS_INACTIVE,
                Item::STATUS_SOON,
            ]),
            'description' => $this->faker->text,
        ];
    }
}
