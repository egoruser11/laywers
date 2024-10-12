@extends('lawyer.layout.app')

@section('title', 'Расписание')

@section('content-title', 'Расписание')

@section('css')
    <style>
        .std {
            height: 190px;
            width: 200px;
            position: relative;
        }

        .std p {
            padding-left: 12px;
        }

        .std-task-day {
            background-color: #C3EFD7;
            color: #626262;
        }

        .std-day {
            font-size: 20px;
            position: absolute;
            top: 4px;
            right: 8px;
        }
    </style>
@endsection
@section('content')

    <hr>
    <div class="row mb-2">
        <div class="col-md-3">
            <a href="{{route('lawyer.schedule.index',['date' => $prevMonth->format('m-Y')])}}"><span
                    style="font-size: larger;">{{$prevMonth->format('M')}}</span></a>
        </div>
        <div class="col-md-5 text-center">
            <span style="font-size: larger;">{{$month->format('M-Y')}}</span>
        </div>
        <div class="col-md-3 text-right">
            <a href="{{route('lawyer.schedule.index',['date' => $nextMonth->format('m-Y')])}}"><span
                    style="font-size: larger;">{{($nextMonth)->format('M') }}</span></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-11">
            <div class="table-responsive">
                <table class="mb-0 table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">Пн</th>
                        <th class="text-center">Вт</th>
                        <th class="text-center">Ср</th>
                        <th class="text-center">Чт</th>
                        <th class="text-center">Пт</th>
                        <th class="text-center">Сб</th>
                        <th class="text-center">Вск</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($days as $index => $day)
                        @if($index % 7 == 0)
                            <tr>
                                @endif
                                <td class="std @if(!empty($day['applications']))  std-task-day  @endif">
                                    <p>
                                        @foreach($day['applications'] as $application)
                                            {{$application['period']}}<a href="№">№ {{$application['id']}}</a> <br>
                                        @endforeach
                                    </p>
                                    <div class="std-day">{{$day['number']}}</div>
                                </td>
                                @if(($index + 1) % 7 == 0)
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
    </script>
@endsection
