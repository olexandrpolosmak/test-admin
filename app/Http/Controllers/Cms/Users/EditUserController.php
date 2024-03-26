<?php
/**
 * Description of EditUserController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Cms\Users;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\View\View;

class EditUserController extends Controller
{
    public function __invoke(string $id): View
    {
        $user = User::findOrFail($id);
        return view('users.edit', [
            'user' => $user,
        ]);
    }
}
