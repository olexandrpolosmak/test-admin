<?php
/**
 * Description of BaseModel.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

/**
 *
 *
 * @method static Builder|BaseModel|static newModelQuery()
 * @method static Builder|BaseModel|static newQuery()
 * @method static Builder|BaseModel|static query()
 */
class BaseModel extends Model
{
    use HasFactory;
    use HasUuids;

    public function newUniqueId(): string
    {
        return Uuid::uuid7()->toString();
    }

    protected $keyType = 'string';

    public $incrementing = false;

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $guarded = [];

    protected $casts = [
        'data' => 'array',
    ];
}
