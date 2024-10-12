<?php


namespace App\Services\Manager;


use App\Models\Application;
use Carbon\Carbon;

class ApplicationDateAlgoService
{
    private Carbon $startWork;


    private function getDaysForChecking(): array
    {
        $days = [];
        $daysNumbers = config('lawyer.schedule.days');
        for ($i = 1; $i <= 14; $i++) {
            $day = now()->addDays($i);
            if (in_array($day->dayOfWeek, $daysNumbers)) {
                $days[] = $day->format('Y-m-d');
            }
        }
        return $days;
    }

//-1 если серия из $count нулей в массиве не найдена , иначе индекс первого нуля.
    private function findZeroSeries(array $numbers, int $count): int
    {
        $currentCount = 0;
        for ($i = 0; $i < count($numbers); $i++) {
            if ($numbers[$i] == 0) {
                $currentCount++;
                if ($currentCount == $count) {
                    return $i - $count + 1;
                }
            } else {
                $currentCount = 0;
            }

        }
        return -1;
    }


    private function checkApplicationOnDay(string $day, Application $application, array $dayHours): array
    {
        $currentStart = Carbon::parse($application->work_start_date_and_time);
        $currentEnd = $currentStart->copy()->addHours($application->count_hours_work);
        if ($currentStart->format('Y-m-d') == $day) {
            for ($i = Carbon::parse($currentStart->format('H:I'))->diffInHours(Carbon::parse($this->startWork->format('H:i'))); $i < Carbon::parse($currentEnd->format('H:i'))->diffInHours(Carbon::parse($this->startWork->format('H:i'))); $i++) {
                $dayHours[$i] = 1;
            }
        }
        return $dayHours;
    }

    private function defineStartDateTime($applications, int $countHours): ?Carbon
    {
        $this->startWork = Carbon::createFromFormat('H:i', config('lawyer.schedule.start_at'));
        $endWork = Carbon::parse(config('lawyer.schedule.end_at'));
        $workHours = $endWork->diffInHours($this->startWork);
        $days = $this->getDaysForChecking();
        foreach ($days as $day) {
            $dayHours = array_fill(0, $workHours, 0);
            foreach ($applications as $application) {
                $dayHours = $this->checkApplicationOnDay($day, $application, $dayHours);
            }
            $index = $this->findZeroSeries($dayHours, $countHours);
            dump($index);
            if ($index != -1) {
                return Carbon::createFromFormat('Y-m-d H:i', $day . ' ' . $this->startWork->format('H:i'))->addHours($index);
            }

        }
        return null;
    }

    public function run(array $data)
    {
        $id = $data['lawyer_id'];
        $countHours = $data['count_hours_work'];
        $applications = Application::where('lawyer_id', $id)->where('work_start_date_and_time', '>=', now())
            ->where('work_start_date_and_time', '<=', now()->addWeeks(config('lawyer.schedule.weeks_count')))
            ->select('id', 'work_start_date_and_time', 'count_hours_work')->get();
        $result = $this->defineStartDateTime($applications, $countHours);
        $data['status'] = Application::STATUS_IN_WORK;
        $data['start_at'] = now();
        $data['work_start_date_and_time'] = $result;
        Application::create($data);
    }

}
