<?php
/**
 * Description of UpdateUserRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Cms\Users\Request;


use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'status' => [
                'required',
                Rule::in([
                    User::STATUS_ACTIVE,
                    User::STATUS_INACTIVE,
                    User::STATUS_BANNED,

                ]),
            ],
            'level' => [
                'required',
                Rule::in([
                    User::LEVEL_ADMIN,
                    User::LEVEL_MODERATOR,
                    User::LEVEL_USER,

                ]),
            ],
            'phone' => 'required|string',
            'password' => 'nullable|string',
        ];
    }
}
