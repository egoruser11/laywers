<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Services\Lawyer\ScheduleAlgoService;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;


class ScheduleController extends Controller
{
    private ScheduleAlgoService $scheduleAlgoService;
    public function __construct(ScheduleAlgoService $scheduleAlgoService)
    {
        $this->scheduleAlgoService = new ScheduleAlgoService();
    }

    public function index(Request $request)
    {
        if ($request->has('date')) {
//в дейт приходит строка '05-2024' 'm-Y'
            $month = Carbon::createFromFormat('m-Y', $request->date);
        } else {
            $month = now();
        }
        $prevMonth = $month->copy()->subMonth();
        $nextMonth = $month->copy()->addMonth();
       $days = $this->scheduleAlgoService->run($month);

        return view('lawyer.schedule.index', compact('month', 'prevMonth', 'nextMonth', 'days'));
    }

}
