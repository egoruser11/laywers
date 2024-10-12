<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{


    public function index(Request $request)
    {
        $topics = Topic::orderBy('id')->get();

        return view('admin.topics.index', compact('topics'));
    }

    public function create()
    {
        return view('admin.topics.create');
    }

    public function store(Request $request)
    {
        Topic::create([
                'name' => $request->new_topic,
            ]
        );
        return redirect()->route('admin.topics.index')->with('message', 'Тема успешно добавлена');
    }

    public function destroy($id)
    {
        if (Topic::where('id', $id)->exists()) {
            Topic::where('id', $id)->delete();
            return redirect()->route('admin.topics.index')->with('message', 'Тема была удалена');
        }
        return redirect()->route('admin.topics.index')->with('message', 'Такой темы не существует');
    }

    public function edit($id)
    {
        $topic = Topic::find($id);
        if ($topic) {
            return view('admin.topics.edit', compact('topic',));
        }

        return redirect()->route('admin.topics.index')->with('message', 'Тема не найдена');

    }

    public function update($id, Request $request)
    {
        Topic::where('id', $id)->update(

            [
                'name' => $request->name,
            ]

        );
        return redirect()->route('admin.topics.index')->with('message', 'Тема обновлена');

    }

}
