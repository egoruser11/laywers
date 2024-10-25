<?php


namespace App\Services\Admin;


use App\Models\Application;
use App\Models\Client;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserCreateService
{
    public function create($request)
    {
        return User::create(

            [
                'account' => $request->status,
                'login' => $request->login,
                'name' => $request->name,
                'password' => bcrypt($request->password),
                'role' => $request->role,
                'start_at' => now(),
            ]
        );
    }
}
