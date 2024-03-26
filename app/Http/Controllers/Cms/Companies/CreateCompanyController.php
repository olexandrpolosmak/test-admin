<?php
/**
 * Description of CreateCompanyController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Cms\Companies;


use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CreateCompanyController extends Controller
{
    public function __invoke(): View
    {
        return view('companies.create');
    }
}
