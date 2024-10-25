<?php


namespace App\Services\Admin;


use App\Models\Application;
use App\Models\Client;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileUpdatePasswordService
{
    public function updatePassword($request)
    {
        $passwordHash = Auth::user()->password;
        if (!Hash::check($request->current_password, $passwordHash)) {
            return redirect()->route('admin.profile.index')->with('error_message', 'Неверный текущий пароль')->with(['flag' => 'not']);
        }
        if ($request->password != $request->password_confirmation) {
            return redirect()->route('admin.profile.index')->with('error_message', 'Пароли разнятся')->with(['flag' => 'not']);
        }
        return User::where('id', Auth::id())->update(
            [
                'password' => bcrypt($request->password),
            ]
        );
    }
}
