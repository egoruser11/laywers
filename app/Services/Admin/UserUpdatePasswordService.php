<?php


namespace App\Services\Admin;


use App\Models\Application;
use App\Models\Client;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserUpdatePasswordService
{
    public function updatePassword($request,$id)
    {
        if ($request->password != $request->password_confirmation) {
            return redirect()->route('admin.users.edit', $id)->with('error_message', 'Пароли разнятся');
        }
        return User::where('id', $id)->update(
            [
                'password' => bcrypt($request->password),
            ]
        );
    }
}
