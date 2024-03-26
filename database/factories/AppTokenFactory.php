<?php

namespace Database\Factories;

use App\Models\AppToken;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AppToken>
 */
class AppTokenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       return [
            'type' => $this->faker->randomElement([AppToken::TYPE_ANDROID, AppToken::TYPE_IOS]),
            'status' => $this->faker->randomElement([AppToken::STATUS_ACTIVE, AppToken::STATUS_INACTIVE]),
            'device_token' => $this->faker->uuid,
            'notification_token' => $this->faker->uuid,
            'data' => [
                'os_version' => '12.0.' . random_int(0, 100),
                'app_version' => '1.0.' . random_int(0, 100),
            ],
        ];
    }
}
