<?php
/**
 * Description of Image.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Helpers;


class Image
{
    public static function publicPath(?string $image): ?string
    {
        if (!$image) {
            return null;
        }

        return asset('storage/images/' . $image);
    }
}
