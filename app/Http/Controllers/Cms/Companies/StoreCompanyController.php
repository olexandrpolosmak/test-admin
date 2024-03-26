<?php
/**
 * Description of StoreCompanyController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Cms\Companies;


use App\Http\Controllers\Cms\Companies\Requests\FormCompanyRequest;
use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\RedirectResponse;

class StoreCompanyController extends Controller
{
    public function __invoke(FormCompanyRequest $request): RedirectResponse
    {
        $company = Company::create($request->getData());

        return redirect()->route('companies.edit', $company);
    }
}
