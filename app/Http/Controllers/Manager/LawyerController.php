<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LawyerController extends Controller
{
    public function index(Request $request)
    {

        $lawyers = User::where('role',User::LAWYER_ROLE)->get();

        return view('manager.lawyers.index',
            compact('lawyers'));
    }

    public function edit($id)
    {
        $lawyer = User::find($id);
        $statuses = User::getStatusesOfAccount();


        if ($lawyer) {
            return view('manager.lawyers.edit', compact('lawyer' ,'statuses'));
        }

        return redirect()->route('manager.lawyers.index')->with('message', 'Юрист не найден');

    }

    public function update($id, Request $request)
    {
        User::where('id', $id)->update(

            [
                'name' => $request->name,
                'account' => $request->status,
                'login' => $request->login,
            ]

        );
        return redirect()->route('manager.lawyers.edit',[$id])->with('message', 'Данные обновлены');

    }

    public function destroy($id)
    {
        if (User::find($id)->exists()) {
            User::where('id', $id)->delete();
            return redirect()->route('manager.lawyers.index')->with('message', 'Юрист был удален');
        }
        return redirect()->route('manager.lawyers.index')->with('message', 'Такого юриста не существует');

    }

    public function create()
    {
        $lawyers = User::where('role',User::LAWYER_ROLE)->get();
        $statuses = User::getStatusesOfAccount();

        return view('manager.lawyers.create', compact('lawyers','statuses'));

    }

    public function store(Request $request)
    {
        User::create(

            [
                'name' => $request->name,
                'account' => $request->status,
                'login' => $request->login,
                'password' =>bcrypt($request->password),
                'role' => User::LAWYER_ROLE,
            ]

        );
        return redirect()->route('manager.lawyers.index')->with('message', 'Новый юрист создан');

    }

    public function updatePassword($id, Request $request)
    {
        if ($request->password != $request->password_confirmation) {
            return redirect()->route('manager.users.edit',$id)->with('error_message', 'Пароли разнятся');
        }
        User::where('id', $id)->update(
            [
                'password' => bcrypt($request->password),
            ]
        );
        return redirect()->route('manager.users.edit', [$id])->with('message', 'Пароль обновлен');

    }


}
