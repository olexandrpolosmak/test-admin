<?php
/**
 * Description of SignInController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Cms\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class SignOutController extends Controller
{
    public function __invoke(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('auth.signIn');
    }

}
