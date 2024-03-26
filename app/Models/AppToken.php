<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @property string $id
 * @property string $type
 * @property int $status
 * @property string $device_token
 * @property string|null $notification_token
 * @property array|null $data
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\AppTokenFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|AppToken newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppToken newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppToken query()
 * @method static \Illuminate\Database\Eloquent\Builder|AppToken whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppToken whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppToken whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppToken whereDeviceToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppToken whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppToken whereNotificationToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppToken whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppToken whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppToken whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AppToken extends BaseModel
{
    public const STATUS_INACTIVE = 0;
    public const STATUS_ACTIVE = 10;

    public const TYPE_IOS = 'ios';
    public const TYPE_ANDROID = 'android';
}
