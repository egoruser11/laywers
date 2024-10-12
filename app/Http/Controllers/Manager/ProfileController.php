<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        return view('manager.profile.index', compact('user'));

    }


    public function update(Request $request)
    {
        User::where('id', Auth::id())->update(

            [
                'name' => $request->name,
            ]

        );
        return redirect()->route('manager.profile.index')->with('message', 'ФИО изменено');
    }

    public function updatePassword(Request $request)
    {
        $passwordHash = Auth::user()->password;
        if (!Hash::check($request->current_password, $passwordHash)) {
            return redirect()->route('manager.profile.index')->with('error_message', 'Неверный текущий пароль');
        }
        if ($request->password != $request->password_confirmation) {
            return redirect()->route('manager.profile.index')->with('error_message', 'Пароли разнятся');
        }
        User::where('id', Auth::id())->update(
            [
                'password' => bcrypt($request->password),
            ]
        );
        return redirect()->route('manager.profile.index')->with('message', 'Пароль изменен');

    }

}
