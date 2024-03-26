<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Database\Factories\NotificationCampaignFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

/**
 *
 *
 * @property string $id
 * @property string $name
 * @property string $type
 * @property int $status
 * @property int $sending_time
 * @property array|null $data
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static NotificationCampaignFactory factory($count = null, $state = [])
 * @method static Builder|NotificationCampaign newModelQuery()
 * @method static Builder|NotificationCampaign newQuery()
 * @method static Builder|NotificationCampaign query()
 * @method static Builder|NotificationCampaign whereAccountId($value)
 * @method static Builder|NotificationCampaign whereCreatedAt($value)
 * @method static Builder|NotificationCampaign whereData($value)
 * @method static Builder|NotificationCampaign whereId($value)
 * @method static Builder|NotificationCampaign whereName($value)
 * @method static Builder|NotificationCampaign whereSendingTime($value)
 * @method static Builder|NotificationCampaign whereStatus($value)
 * @method static Builder|NotificationCampaign whereType($value)
 * @method static Builder|NotificationCampaign whereUpdatedAt($value)
 * @mixin Eloquent
 */
class NotificationCampaign extends BaseModel
{
    public const STATUS_DRAFT = 0;

    public const STATUS_APPROVED = 10;

    public const STATUS_PROCESSING = 20;

    public const STATUS_FINISHED = 30;

    public const STATUS_DECLINED = 40;

    public const TYPE_PUSH = 'push';

    public function getTitle(): string
    {
        return $this->getData()['title'] ?? '';
    }

    public function getDescription(): string
    {
        return $this->getData()['description'] ?? '';
    }

    public function getImage(): ?string
    {
        return $this->getData()['image'] ?? null;
    }

    public function getButtonText(): string
    {
        return $this->getData()['button']['text'] ?? '';
    }

    public function getButtonLink(): string
    {
        return $this->getData()['button']['link'] ?? '';
    }

    public function isDraft(): bool
    {
        return $this->status === self::STATUS_DRAFT;
    }

    public function isApproved(): bool
    {
        return $this->status === self::STATUS_APPROVED;
    }

    public function getData(): array
    {
        return $this->data ?? [];
    }
}
