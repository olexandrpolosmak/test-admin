<?php

namespace Database\Factories;

use App\Models\NotificationCampaign;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<NotificationCampaign>
 */
class NotificationCampaignFactory extends Factory
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
            'status' => NotificationCampaign::STATUS_FINISHED,
            'type' => NotificationCampaign::TYPE_PUSH,
            'sending_time' => $this->faker->unixTime,
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
