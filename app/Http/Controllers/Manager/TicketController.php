<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Client;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request)
    {

        $clients = Client::query();
        $filter = [
            'search' => $request->search,
            'sort' => $request->sort,
        ];

        if (!empty($request->search)) {
            $search = '%' . strtolower(trim($request->search)) . '%';
            $clients->where(function ($query) use ($search) {
                $query->where('full_name', 'like', $search)->orWhere('email', 'like', $search)->orWhere('phone','like',$search);
            });
        }


        if (!empty($request->sort)) {
            if ($request->sort == 'yes') {
                $clients->orderBy('created_at');
            } elseif ($request->sort == 'no') {
                $clients->orderBy('id', 'desc');
            }
        }

        $clients = $clients->orderBy('id', 'desc')->paginate();

        return view('manager.clients.index', compact('clients', 'filter'));
    }

    public function create()
    {
        $clients = Client::all();
        return view('manager.clients.create', compact('clients'));
    }

    public function store(Request $request)
    {
        Client::create(
            [
                'full_name' => $request->surname . ' ' .$request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'date_born' => $request->date_born,
                'document' => $request->document,
                'document_number' => $request->document_number,
                'issued_by' => $request->issued_by,
                'residential_address' => $request->issued_by,
                'registration_address' => $request->issued_by,
                'additional_information' => $request->issued_by,
            ]
        );
        return redirect()->route('manager.clients.index')->with('message', 'Пользователь успешно добавлен');

    }

    public function edit($id)
    {


        $client = Client::find($id);
        $surnameAndName =  Client::where('id', $id)->value('full_name');
        $nameAndSurname = explode(' ',$surnameAndName);


        if ($client) {
            return view('manager.clients.edit', compact('client','nameAndSurname'));
        }

        return redirect()->route('manager.clients.index')->with('message', 'Клиент не найден');
    }

    public function update($id, Request $request)
    {
        Client::where('id', $id)->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]
        );
        return redirect()->route('manager.clients.index', [$id])->with('message', 'Клиент обновлен');

    }

    public function destroy($id)
    {
        if (Client::find($id)) {
            Client::where('id', $id)->delete();
            return redirect()->route('manager.clients.index')->with('message', 'Клиент удален');
        }
        else
            return redirect()->route('manager.clients.index')->with('message', 'Клиент не найден');

    }
}
