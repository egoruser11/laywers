<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;


class ScheduleController extends Controller
{
    private function getApplicationsByDay(Collection $applications, Carbon $day): array
    {
        $dayApplications = [];
        foreach($applications as $application){
            if(Carbon::parse($application->work_start_date_and_time)->format('M-d') == $day->format('M-d')){
                $dayApplications[] = [
                    'period' => $application->start_work_date_str. '-' . $application->end_work_date_str,
                    'id' => $application->id,
                ];
            }

        }
        return $dayApplications;
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
        $firstDay = $month->copy()->startOfMonth();
        $lastDay = $month->copy()->endOfMonth();
        $days = [];
        if ($firstDay->dayOfWeek != Carbon::MONDAY) {
            $prevDaysCount = $firstDay->dayOfWeek == Carbon::SUNDAY ? 6 : $firstDay->dayOfWeek - 1;
            $firstDay->subDays($prevDaysCount);
            for ($i = 0; $i < $prevDaysCount; $i++) {
                $days[] = [
                    'number' => $firstDay->day,
                    'is_current_month' => false,
                    'applications' => [],
                ];
                $firstDay->addDay();
            }
        }
        $applications = Application::where('lawyer_id', Auth::id())
            ->where('work_start_date_and_time', '>=', $firstDay)
            ->where('work_start_date_and_time', '<=', $lastDay)
            ->orderBy('work_start_date_and_time')
            ->get();
        for ($i = 0; $i < $lastDay->day; $i++) {
            $days[] = [
                'number' => $firstDay->day,
                'is_current_month' => true,
                'applications' => $this->getApplicationsByDay($applications,$firstDay),
            ];
            $firstDay->addDay();
        }
        while ($firstDay->dayOfWeek != Carbon::MONDAY) {
            $days[] = [
                'number' => $firstDay->day,
                'is_current_month' => true,
                'applications' => [],
            ];
            $firstDay->addDay();
        }


//        $days = [
//            [
//                'number' => 1,
//                'is_current_month' => true,
//                'applications' => [
//                    [
//                        'period' => '10:00 - 12:00',
//                        'id' => 1,
//                    ],
//                    [
//                        'period' => '12:00 - 13:00',
//                        'id' => 2,
//                    ],
//                ],
//            ],
//            [
//                'number' => 2,
//                'is_current_month' => true,
//                'applications' => [
//                    [
//                        'period' => '10:00 - 12:00',
//                        'id' => 4,
//                    ],
//                    [
//                        'period' => '12:00 - 13:00',
//                        'id' => 5,
//                    ],
//                ],
//            ],
//        ];


        return view('lawyer.schedule.index', compact('month', 'prevMonth', 'nextMonth', 'days'));
    }

}
