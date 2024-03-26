<?php

namespace App\Models;

use Database\Factories\CompanyFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

/**
 *
 *
 * @property string $id
 * @property string $name
 * @property int $status
 * @property array|null $data
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static CompanyFactory factory($count = null, $state = [])
 * @method static Builder|Company whereAccountId($value)
 * @method static Builder|Company whereCreatedAt($value)
 * @method static Builder|Company whereData($value)
 * @method static Builder|Company whereId($value)
 * @method static Builder|Company whereName($value)
 * @method static Builder|Company whereStatus($value)
 * @method static Builder|Company whereUpdatedAt($value)
 */
class Company extends BaseModel
{
    public const STATUS_INACTIVE = 0;
    public const STATUS_ACTIVE = 10;

    public const STATUS_SOON = 20;

    public function getDescription(): ?string
    {
        return $this->getData()['description'] ?? null;
    }

    public function getOwnerName(): ?string
    {
        return $this->getData()['ownerName'] ?? null;
    }

    public function getOwnerPhone(): ?string
    {
        return $this->getData()['ownerPhone'] ?? null;
    }

    public function getData(): array
    {
        return $this->data ?? [];
    }
}
