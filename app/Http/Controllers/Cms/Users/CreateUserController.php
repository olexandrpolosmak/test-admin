<?php
/**
 * Description of CreateUserController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Cms\Users;


use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CreateUserController extends Controller
{
    public function __invoke(): View
    {
        return view('users.create');
    }
}
