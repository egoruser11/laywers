<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Client;
use App\Models\Topic;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $topics = Topic::orderBy('name')->get();
        return view('main.index', compact('topics'));
    }

    public function store(Request $request)
    {
        $client = Client::where('phone', $request->phone)->first();
        $application = Application::create(
            [
                'name' => $request->name,
                'phone' => $request->phone,
                'start_at' => now(),
                'topic_id' => $request->topic_id,
                'description' => $request->description,
                'status' => Application::STATUS_NEW,
                'client_id' => empty($client) ? null : $client->id,
            ]
        );
        return redirect()->route('main');

    }
}
