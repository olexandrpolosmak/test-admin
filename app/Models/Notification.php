<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 *
 *
 * @property string $id
 * @property string $app_token_id
 * @property string|null $notification_campaign_id
 * @property string $type
 * @property int $status
 * @property int $sent_time
 * @property int $read
 * @property array|null $data
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\NotificationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereAppTokenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereNotificationCampaignId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereSentTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Notification extends BaseModel
{
    use HasFactory;

    public const STATUS_NEW = 0;

    public const STATUS_PROCESSING = 10;

    public const STATUS_COMPLETED = 20;

    public const STATUS_FAILED = 30;

    public const READ_YES = 10;

    public const READ_NO = 0;

    public const TYPE_PUSH = 'push';

}
