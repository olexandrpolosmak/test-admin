<?php
/**
 * Description of PaymentCardFormDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Users\Profile\Handlers\DTO;


use Dots\Data\DTO;

class PaymentCardFormDTO extends DTO
{
    protected string $cardNumber;
    protected string $cardHolder;
    protected string $expirationDate;
    protected string $cvv;

    public function getCardNumber(): string
    {
        return $this->cardNumber;
    }

    public function getCardHolder(): string
    {
        return $this->cardHolder;
    }

    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }

    public function getCvv(): string
    {
        return $this->cvv;
    }
}
