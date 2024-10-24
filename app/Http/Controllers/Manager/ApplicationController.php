<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Client;
use App\Models\Court;
use App\Models\Topic;
use App\Models\User;
use App\Services\Manager\ApplicationDateAlgoService;
use App\Services\Manager\ApplicationService;
use App\Services\Manager\ApplicationUpdate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{

    private ApplicationService $applicationService;
    private ApplicationUpdate $applicationUpdate;
    private ApplicationDateAlgoService $applicationDateAlgoService;

    public function __construct(ApplicationService $applicationService, ApplicationDateAlgoService $applicationDateAlgoService, ApplicationUpdate $applicationUpdate)
    {
        $this->applicationService = $applicationService;
        $this->applicationDateAlgoService = $applicationDateAlgoService;
        $this->applicationUpdate = $applicationUpdate;
    }

    public function index(Request $request)
    {
        $id = Auth::id();
        $applications = Application::where(function ($query) use ($id) {
            $query->where('manager_id', $id)->orWhereNull('manager_id');
        });
        $statuses = Application::getStatuses();
        $topics = Topic::orderBy('name')->get();

        if (!empty($request->search)) {
            $search = '%' . strtolower(trim($request->search)) . '%';
            $applications->where(function ($query) use ($search) {
                $query->where('phone', 'like', $search)->orWhere('name', 'like', $search);
            });
        }

        if (!empty($request->status)) {
            $applications->where('status', $request->status);
        }

        if (!empty($request->topic)) {
            $applications->where('topic_id', $request->topic);
        }

        $applications = $applications->orderBy('id', 'desc')->paginate();
        $filter = [
            'search' => $request->search,
            'status' => $request->status,
            'topic' => $request->topic,
        ];
        return view('manager.applications.index',
            compact('applications', 'statuses', 'topics', 'filter'));
    }

    public function edit(int $id)
    {
        $application = Application::findOrFail($id);
//        abort_if(!$application,404,'Заявка не найдена или доступ запрещен');
        abort_if($application->canNotManager(), 403, 'Заявка не найдена или доступ запрещен');
        $statuses = Application::getStatuses();
        $types = Application::getTypes();
        $topics = Topic::orderBy('name')->get();
        $lawyers = User::where('role', User::LAWYER_ROLE)->get();
        $managers = User::where('role', User::MANAGER_ROLE)->get();
        $courts = Court::orderBy('id')->pluck('name')->toArray();
        $client_id = Application::where('id', $id)->value('client_id');
        $client = Client::where('id', $client_id);
        return view('manager.applications.edit', compact('application', 'topics', 'statuses',
            'lawyers', 'managers', 'courts', 'types', 'client'));
    }

    public function update(int $id, Request $request)
    {
        $application = Application::find($id);
        if ($application->canManager()) {
            return redirect()->route('manager.applications.index')->with('message', 'Заявка не найдена или доступ запрещен');
        }
        $this->applicationUpdate->update($id, $request->except('_token'));
        return redirect()->route('manager.applications.edit', [$id])->with('message', 'Заявка обновлена');
    }

    public function destroy($id)
    {
        if (Application::find($id)->exists()) {
            Application::where('id', $id)->delete();
            return redirect()->route('manager.index')->with('message', 'Заявка была удалена');
        }
        return redirect()->route('manager.index')->with('message', 'Такой заявки не существует');

    }


    public function create()
    {
        $clients = Client::orderBy('id')->get();
        $lawyers = User::lawyer()->get();
        $managers = User::where('role', User::MANAGER_ROLE)->get();
        $courts = Court::orderBy('id')->pluck('name')->toArray();
        $topics = Topic::orderBy('name')->get();
        $types = Application::getTypes();

        return view('manager.applications.create', compact('topics', 'types', 'courts', 'managers', 'lawyers', 'clients'));

    }


    public function store(Request $request)
    {
        if (!empty($request->meeting_date) && !empty($request->work_start_date_and_time)) {
            $this->applicationService->store($request->except('_token'));
            return redirect()->route('manager.applications.index')->with('message', 'Заявка успешно добавлена');
        }
        $this->applicationDateAlgoService->run($request->except('_token'));

        return redirect()->route('manager.applications.index')->with('message', 'Заявка успешно добавлена');

    }


}
