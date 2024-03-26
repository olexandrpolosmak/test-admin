<?php
/**
 * Description of FormCompanyRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Cms\Companies\Requests;


use App\Models\Company;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FormCompanyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'status' => [
                Rule::in([
                    Company::STATUS_ACTIVE,
                    Company::STATUS_INACTIVE,
                    Company::STATUS_SOON,
                ]),
            ],
            'description' => 'required|string|max:255',
            'ownerPhone' => 'required|string|max:255',
            'ownerName' => 'required|string|max:255',
        ];
    }

    public function getData(): array
    {
        return [
            'name' => $this->validated('name'),
            'status' => $this->validated('status'),
            'data' => [
                'description' => $this->validated('description'),
                'ownerPhone' => $this->validated('ownerPhone'),
                'ownerName' => $this->validated('ownerName'),
            ],
        ];
    }
}
