<?php
/**
 * Description of EditCompanyController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Cms\Companies;


use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\View\View;

class EditCompanyController extends Controller
{
    public function __invoke(string $id): View
    {
        $company = Company::findOrFail($id);

        return view('companies.edit', [
            'company' => $company,
        ]);
    }
}
