<?php
/**
 * Description of UpdateUserController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Cms\Users;


use App\Http\Controllers\Cms\Users\Request\UpdateUserRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class UpdateUserController extends Controller
{
    public function __invoke(UpdateUserRequest $request, string $userId): RedirectResponse
    {
        $user = User::find($userId);
        if (!$user) {
            abort(404, 'User not found');
        }
        $data = $request->validated();
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }
        $user->update($data);

        return redirect()->route('users.edit', $user->id);
    }
}
