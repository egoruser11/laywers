<?php


namespace App\Services\Admin;


use App\Models\Application;
use App\Models\Client;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserUpdateService
{
    public function update(array $data,int $id)
    {
        return User::where('id',$id)->update($data);
    }
}
