<?php
/**
 * Description of FormNotificationCampaginRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Cms\NotificationCampaigns\Requests;


use App\Models\NotificationCampaign;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Ramsey\Uuid\Uuid;

class FormNotificationCampaignRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'status' => [
                Rule::in([
                    NotificationCampaign::STATUS_DRAFT,
                    NotificationCampaign::STATUS_APPROVED,
                    NotificationCampaign::STATUS_DECLINED,
                ]),
            ],
            'type' => [
                Rule::in([
                    NotificationCampaign::TYPE_PUSH,
                ]),
            ],

            'sending_time' => 'required|date',
            'title' => 'required|string|max:255',
            'image' => 'nullable|file',
            'buttonText' => 'required|string|max:255',
            'buttonLink' => 'required|url',
            'description' => 'required|string|max:1000',
        ];
    }

    public function getData(?NotificationCampaign $campaign = null): array
    {
        $sendingTime = $this->validated('sending_time');
        $sendingTime = Carbon::createFromFormat('Y-m-d', $sendingTime)->endOfDay()->getTimestamp();

        return [
            'name' => $this->validated('name'),
            'status' => !$campaign ? NotificationCampaign::STATUS_DRAFT : $this->validated('status'),
            'type' => $this->validated('type'),
            'sending_time' => $sendingTime,
            'data' => [
                'title' => $this->validated('title'),
                'description' => $this->validated('description'),
                'image' => $this->getFormFileId('image'),
                'button' => [
                    'text' => $this->validated('buttonText'),
                    'link' => $this->validated('buttonLink'),
                ],
            ],
        ];
    }

    private function getFormFileId(string $field = 'image'): ?string
    {
        if (!$this->validated($field)) {
            return null;
        }

        $file = $this->file($field);
        $fileName = Uuid::uuid7()->toString() . '.' . $file->getClientOriginalExtension();
        $file->move(
            storage_path('app/public/images'),
            $fileName,
        );

        return $fileName;
    }
}
