<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {

        $statuses = User::getStatusesOfAccount();
        $roles = User::getRoles();
        $users = User::query();

        $filter = [
            'search' => $request->search,
            'status' => $request->status,
            'role' => $request->role,
            'sort' => $request->sort,
        ];

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

        $users = $users->orderBy('id', 'desc')->paginate();


        return view('admin.users.index', compact('users', 'statuses', 'roles', 'filter'));
    }

    public function create()
    {
        $users = User::all();

        $statuses = User::getStatusesOfAccount();

        $roles = User::getRoles();

        return view('admin.users.create', compact('users', 'statuses', 'roles'));

    }

    public function store(StoreRequest $request)
    {
        User::create(

            [
                'account' => $request->status,
                'login' => $request->login,
                'name' => $request->name,
                'password' => bcrypt($request->password),
                'role' => $request->role,
                'start_at' => now(),
            ]

        );
        return redirect()->route('admin.users.index')->with('message', 'Пользователь успешно добавлен');

    }

    public function edit($id)
    {
        $roles = User::getRoles();
        $statuses = User::getStatusesOfAccount();
        $user = User::find($id);

        if ($user) {
            return view('admin.users.edit', compact('roles', 'user', 'statuses'));
        }

        return redirect()->route('admin.users.index')->with('message', 'Пользователь не найден');
    }

    public function update($id, Request $request)
    {
        User::where('id', $id)->update(

            [
                'account' => $request->status,
                'login' => $request->login,
                'name' => $request->name,
                'role' => $request->role,
                'start_at' => now(),
            ]

        );
        return redirect()->route('admin.users.edit', [$id])->with('message', 'Пользователь обновлен');

    }

    public function destroy($id)
    {
        if (User::find($id)->exists()) {
            User::where('id', $id)->delete();
            return redirect()->route('admin.users.index')->with('message', 'Пользователь был удален');
        }
        return redirect()->route('admin.users.index')->with('message', 'Такой пользователь не найден');

    }

    public function updatePassword($id, Request $request)
    {
        if ($request->password != $request->password_confirmation) {
            return redirect()->route('admin.users.edit',$id)->with('error_message', 'Пароли разнятся');
        }
        User::where('id', $id)->update(
            [
                'password' => bcrypt($request->password),
            ]
        );
        return redirect()->route('admin.users.edit', [$id])->with('message', 'Пароль обновлен');

    }

}
