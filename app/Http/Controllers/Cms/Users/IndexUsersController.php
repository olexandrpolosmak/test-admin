<?php
/**
 * Description of IndexUsersControlelr.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Cms\Users;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\View\View;

class IndexUsersController extends Controller
{
    public function __invoke(): View
    {
        $users = User::all();

        return view('users.index', [
            'users' => $users,
        ]);
    }
}
