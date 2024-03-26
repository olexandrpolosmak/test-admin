<?php
/**
 * Description of PublicIndexItemsController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Web\Companies;


use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\View\View;

class WebIndexCompaniesController extends Controller
{
    public function __invoke(): View
    {
        $items = Company::all();

        return view('web.companies', [
            'items' => $items,
        ]);
    }
}
