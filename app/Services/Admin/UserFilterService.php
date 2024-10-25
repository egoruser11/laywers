<?php


namespace App\Services\Admin;


use App\Models\Application;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserFilterService
{
    public function filter(Request $request)
    {

        $users = User::query()->withTrashed();
        if (!empty($request->search)) {
            $search = '%' . strtolower(trim($request->search)) . '%';
            $users->where(function ($query) use ($search) {
                $query->where('name', 'like', $search)->orWhere('login', 'like', $search);
            });
        }

        if (!empty($request->status)) {
            $users->where('account', $request->status);
        }

        if (!empty($request->role)) {
            $users->where('role', $request->role);
        }
        if (!empty($request->sort)) {
            if ($request->sort == 'account') {
                $users->orderBy('account');
            } elseif ($request->sort == 'date') {
                $users->orderBy('start_at');
            }
        }

        return $users->orderBy('id', 'desc')->paginate();
    }
}
