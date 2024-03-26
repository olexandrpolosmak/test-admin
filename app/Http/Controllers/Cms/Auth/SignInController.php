<?php
/**
 * Description of SignInController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Cms\Auth;


use App\Http\Controllers\Cms\Auth\Requests\SignInRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignInController extends Controller
{
    public function __invoke(SignInRequest $request): RedirectResponse
    {
        //admin - sanya@gmail.com 123
        $user = User::where('email', $request->validated('email'))->first();
        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'Wrong email or password']);
        }
        $valid = Hash::check($request->validated('password'), $user->password);
        // dd($valid);
        if (!$valid) {
            return redirect()->route('auth.signIn')->withErrors(['email' => 'Wrong email or password']);
        }

        Auth::login($user);
        return redirect()->route('dashboard');
    }

}
