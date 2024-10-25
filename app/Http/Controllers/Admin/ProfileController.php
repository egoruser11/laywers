<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\User;
use App\Services\Admin\ProfileUpdatePasswordService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    private ProfileUpdatePasswordService $profileUpdatePasswordService;
    public function __construct(ProfileUpdatePasswordService $profileUpdatePasswordService){
        $this->profileUpdatePasswordService = $profileUpdatePasswordService;
    }
    public function index(Request $request)
    {
        $user = Auth::user();
        return view('admin.profile.index', compact('user'));
    }


    public function update(Request $request)
    {
        User::where('id', Auth::id())->update(
            [
                'name' => $request->name,
            ]
        );
        return redirect()->route('admin.profile.index')->with('message', 'ФИО изменено');
    }

    public function updatePassword(Request $request)
    {
        $this->profileUpdatePasswordService->updatePassword($request);
        return redirect()->route('admin.profile.index')->with('message', 'Пароль изменен');
    }

}
