<?php
/**
 * Description of IndexCompaniesController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Cms\Companies;


use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\View\View;

class IndexCompaniesController  extends Controller
{
    public function __invoke(): View
    {
        $companies = Company::all();

        return view('companies.index', [
            'companies' => $companies,
        ]);
    }

}
