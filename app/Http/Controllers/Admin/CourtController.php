<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Court;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Courts\StoreRequest;

class CourtController extends Controller
{
    public function index()
    {

        $courts = Court::orderBy('name')->get();

        return view('admin.courts.index', compact('courts'));
    }

    public function edit($id)
    {

        $court = Court::find($id);

        if ($court) {
            return view('admin.courts.edit', compact('court',));
        }

        return redirect()->route('admin.courts.index')->with('message', 'Суд не найден');

    }

    public function update($id, Request $request)
    {
        Court::where('id', $id)->update(
            [
                'name' => $request->name,
            ]
        );
        return redirect()->route('admin.courts.index')->with('message', 'Суд обновлен');

    }

    public function destroy($id)
    {
        if (Court::where('id', $id)->exists()) {
            Court::where('id', $id)->delete();
            return redirect()->route('admin.courts.index')->with('message', 'Суд был удален');
        }
        return redirect()->route('admin.courts.index')->with('message', 'Такого суда не существует');

    }

    public function create()
    {
        return view('admin.courts.create');
    }

    public function store(StoreRequest $request)
    {
        Court::create([
                'name' => $request->name,
            ]
        );
        return redirect()->route('admin.courts.index')->with('message', 'Суд успешно добавлен');
    }


}
