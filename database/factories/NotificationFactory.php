<?php

namespace Database\Factories;

use App\Models\Notification;
use App\Models\NotificationCampaign;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => Notification::STATUS_COMPLETED,
            'type' => Notification::TYPE_PUSH,
            'sent_time' => $this->faker->unixTime,
            'read' => $this->faker->randomElement([Notification::READ_YES, Notification::READ_NO]),
            'data' => [
                'title' => $this->faker->sentence,
                'description' => $this->faker->paragraph,
                'image' => $this->faker->imageUrl,
                'button' => [
                    'text' => $this->faker->word,
                    'link' => $this->faker->url,
                ],
            ],
        ];
    }
}
