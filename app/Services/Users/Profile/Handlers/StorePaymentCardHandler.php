<?php
/**
 * Description of StorePaymentCardHandler.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Users\Profile\Handlers;


use App\Models\PaymentCard;
use App\Models\User;
use App\Services\Users\Profile\Handlers\DTO\PaymentCardFormDTO;

class StorePaymentCardHandler
{
    public function handle(
        User $user,
        PaymentCardFormDTO $dto,
    ): void {
        $data = $this->encryptData($dto);
        PaymentCard::create(array_merge($data, [
            'user_id' => $user->id
        ]));
    }

    private function encryptData(PaymentCardFormDTO $dto): array
    {
        $result = [];
        foreach ($dto->toArray() as $key => $value) {
            $result[$key] = encrypt($value);
        }

        return $result;
    }
}
