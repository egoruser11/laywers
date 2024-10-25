<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Client;
use App\Models\Topic;
use App\Models\User;
use App\Services\Admin\ClientCreateService;
use App\Services\Admin\ClientFilterService;
use App\Services\Admin\ClientUpdateService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private ClientFilterService $clientFilterService;
    private ClientCreateService $clientCreateService;
    private ClientUpdateService $clientUpdateService;

    public function __construct(ClientFilterService $clientFilterService, ClientCreateService $clientCreateService
    , ClientUpdateService $clientUpdateService)
    {
        $this->clientFilterService = $clientFilterService;
        $this->clientCreateService = $clientCreateService;
        $this->clientUpdateService = $clientUpdateService;
    }
    public function index(Request $request)
    {

        $clients = Client::query();
        $filter = [
            'search' => $request->search,
            'sort' => $request->sort,
        ];
        $clients = $this->clientFilterService->filter($request, $clients);
        return view('admin.clients.index', compact('clients', 'filter'));
    }

    public function create()
    {
        $clients = Client::all();
        return view('admin.clients.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $this->clientCreateService->create($request->except('_token'));
        return redirect()->route('admin.clients.index')->with('message', 'Пользователь успешно добавлен');
    }

    public function edit($id)
    {
        $client = Client::with('applications.topic', 'applications.manager')->find($id);
        $nameAndSurname = explode(' ', $client->full_name);
        if ($client) {
            return view('admin.clients.edit', compact('client', 'nameAndSurname'));
        }
        return redirect()->route('admin.clients.index')->with('message', 'Клиент не найден');
    }

    public function update($id, Request $request)
    {
       $this->clientUpdateService->update($request->except('_token'),$id);
        return redirect()->route('admin.clients.index', [$id])->with('message', 'Клиент обновлен');

    }

    public function destroy($id)
    {
        if (Client::find($id)->exists()) {
            Client::where('id', $id)->delete();
            return redirect()->route('admin.clients.index')->with('message', 'Клиент удален');
        }
        return redirect()->route('admin.clients.index')->with('message', 'Клиент не найден');
    }
}
