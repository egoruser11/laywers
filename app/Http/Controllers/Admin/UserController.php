<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\StoreRequest;
use App\Models\Application;
use App\Models\User;
use App\Services\Admin\ProfileUpdatePasswordService;
use App\Services\Admin\UserCreateService;
use App\Services\Admin\UserFilterService;
use App\Services\Admin\UserUpdatePasswordService;
use App\Services\Admin\UserUpdateService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private UserFilterService $userFilterService;
    private UserCreateService $userCreateService;
    private UserUpdateService $userUpdateService;
    private UserUpdatePasswordService $userUpdatePasswordService;


    public function __construct(UserFilterService         $userFilterService, UserCreateService $userCreateService,
                                UserUpdatePasswordService $userUpdatePasswordService, UserUpdateService $userUpdateService,)
    {
        $this->userFilterService = $userFilterService;
        $this->userCreateService = $userCreateService;
        $this->userUpdateService = $userUpdateService;
        $this->userUpdatePasswordService = $userUpdatePasswordService;
    }

    public function index(Request $request)
    {
        $statuses = User::getStatusesOfAccount();
        $roles = User::getRoles();
        $filter = [
            'search' => $request->search,
            'status' => $request->status,
            'role' => $request->role,
            'sort' => $request->sort,
        ];
        $users = $this->userFilterService->filter($request);
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
        $this->userCreateService->create($request);
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
        $this->userUpdateService->update($request->except('_token'), $id);
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

    public function forceDestroy(int $id)
    {
        if (User::where('id', $id)->withTrashed()->exists()) {
            User::where('id', $id)->forceDelete();
            return redirect()->route('admin.users.index')->with('message', 'Заявка была удалена польностью');
        }
        return redirect()->route('admin.users.index')->with('message', 'Такой заявки не существует');

    }

    public function restore(int $id)
    {
        if (User::where('id', $id)->withTrashed()->exists()) {
            User::where('id', $id)->restore();
            return redirect()->route('admin.users.index')->with('message', 'Заявка была восстановлена');
        }
        return redirect()->route('admin.users.index')->with('message', 'Такой заявки не существует');

    }

    public function updatePassword($id, Request $request)
    {
        $this->userUpdatePasswordService->updatePassword($request, $id);
        return redirect()->route('admin.users.edit', [$id])->with('message', 'Пароль обновлен');
    }

}
