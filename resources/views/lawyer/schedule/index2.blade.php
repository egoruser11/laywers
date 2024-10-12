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
         <a href="{{route('lawyer.schedule.index',['date' => $prevMonth->format('m-Y')])}}"><span style="font-size: larger;">{{$prevMonth->format('M')}}</span></a>
     </div>
     <div class="col-md-5 text-center">
         <span style="font-size: larger;">{{$month->format('M-Y')}}</span>
     </div>
     <div class="col-md-3 text-right">
         <a href="{{route('lawyer.schedule.index',['date' => $nextMonth->format('m-Y')])}}"><span style="font-size: larger;">{{($nextMonth)->format('M') }}</span></a>
     </div>
 </div>
    {{$firstDay}}
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
                 @for($i = 1;$i < 2;$i++)
                     @if($firstDay == 1)
                 <tr>
                     <td class="std std-task-day">
                         <p>

                         </p>
                         <div class="std-day">{{$i}}</div>
                     </td>
                     <td class="std">
                         <p>

                             10-00 - 12-00 <a href="№">№ 33</a> <br>

                         </p>
                         <div class="std-day">{{$i+1}}</div>
                     </td>
                     <td class="std std-task-day">
                         <p>

                             10-00 - 12-00 <a href="№">№ 33</a> <br>

                         </p>
                         <div class="std-day">{{$i+2}}</div>
                     </td>
                     <td class="std">
                         <p>

                             10-00 - 12-00 <a href="№">№ 33</a> <br>

                         </p>
                         <div class="std-day">{{$i+3}}</div>
                     </td>
                     <td class="std">
                         <p>

                             10-00 - 12-00 <a href="№">№ 33</a> <br>

                         </p>
                         <div class="std-day">{{$i+4}}</div>
                     </td>
                     <td class="std std-task-day">
                         <p>

                             10-00 - 12-00 <a href="№">№ 33</a> <br>

                         </p>
                         <div class="std-day">{{$i+5}}</div>
                     </td>
                     <td class="std std-task-day">
                         <p>

                             10-00 - 12-00 <a href="№">№ 33</a> <br>

                         </p>
                         <div class="std-day">{{$i+6}}</div>
                     </td>
                 </tr>
                 @endif
                     @if($firstDay == 2)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day"></div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+1}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+2}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+3}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+4}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+5}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 3)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day"></div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day"></div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+1}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+2}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+3}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+4}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 4)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day"></div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day"></div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day"></div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+1}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+2}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+3}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 5)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day"></div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day"></div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day"></div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day"></div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+1}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+2}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 6)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day"></div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day"></div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day"></div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day"></div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day"></div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+1}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 0)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day"></div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day"></div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day"></div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day"></div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day"></div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day"></div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i}}</div>
                             </td>
                         </tr>
                     @endif
                 @endfor
                 @for($i = 1;$i < 2;$i++)
                     @if($firstDay == 1)
                 <tr>
                     <td class="std std-task-day">
                         <p>

                             10-00 - 12-00 <a href="№">№ 33</a> <br>

                         </p>
                         <div class="std-day">{{$i+7}}</div>
                     </td>
                     <td class="std">
                         <p>

                             10-00 - 12-00 <a href="№">№ 33</a> <br>

                         </p>
                         <div class="std-day">{{$i+8}}</div>
                     </td>
                     <td class="std std-task-day">
                         <p>

                             10-00 - 12-00 <a href="№">№ 33</a> <br>

                         </p>
                         <div class="std-day">{{$i+9}}</div>
                     </td>
                     <td class="std">
                         <p>

                             10-00 - 12-00 <a href="№">№ 33</a> <br>

                         </p>
                         <div class="std-day">{{$i+10}}</div>
                     </td>
                     <td class="std">
                         <p>

                             10-00 - 12-00 <a href="№">№ 33</a> <br>

                         </p>
                         <div class="std-day">{{$i+11}}</div>
                     </td>
                     <td class="std std-task-day">
                         <p>

                             10-00 - 12-00 <a href="№">№ 33</a> <br>

                         </p>
                         <div class="std-day">{{$i+12}}</div>
                     </td>
                     <td class="std std-task-day">
                         <p>

                             10-00 - 12-00 <a href="№">№ 33</a> <br>

                         </p>
                         <div class="std-day">{{$i+13}}</div>
                     </td>
                 </tr>
                 @endif
                     @if($firstDay == 2)
                         <tr>
                             <td class="std std-task-day">
                                 @foreach($applications as $application)
                                     @if($application->date_month == $i+6)
                                         <p>
                                             {{$application->work_start_date_and_time}}<br>
                                             {{$application->end_work_date}} <br>
                                             <strong>{{$application->id}}</strong>
                                         </p>
                                         @endif
                                     @if($application->date_month != $i+6)
                                             <p>

                                             </p>
                                         @endif()
                                 @endforeach
                                 <div class="std-day">{{$i+6}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+7}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+8}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+9}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+10}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+11}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+12}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 3)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+5}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+6}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+7}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+8}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+9}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+10}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+11}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 4)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+4}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+5}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+6}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+7}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+8}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+9}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+10}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 5)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+3}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+4}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+5}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+6}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+7}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+8}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+9}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 6)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+2}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+3}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+4}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+5}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+6}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+7}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+8}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 0)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+1}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+2}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+3}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+4}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+5}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+6}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+7}}</div>
                             </td>
                         </tr>
                     @endif
                 @endfor
                 @for($i = 1;$i < 2;$i++)
                     @if($firstDay == 1)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+14}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+15}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+16}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+17}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+18}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+19}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+20}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 2)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+13}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+14}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+15}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+16}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+17}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+18}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+19}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 3)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+12}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+13}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+14}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+15}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+16}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+17}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+18}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 4)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+11}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+12}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+13}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+14}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+15}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+16}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+17}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 5)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+10}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+11}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+12}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+13}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+14}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+15}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+16}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 6)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+9}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+10}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+11}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+12}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+13}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+14}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+15}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 0)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+8}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+9}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+10}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+11}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+12}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+13}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+14}}</div>
                             </td>
                         </tr>
                     @endif
                 @endfor
                 @for($i = 1;$i < 2;$i++)
                     @if($firstDay == 1)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+21}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+22}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+23}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+24}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+25}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+26}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+27}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 2)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+20}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+21}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+22}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+23}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+24}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+25}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+26}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 3)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+19}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+20}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+21}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+22}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+23}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+24}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+25}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 4)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+18}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+19}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+20}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+21}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+22}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+23}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+24}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 5)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+17}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+18}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+19}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+20}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+21}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+22}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+23}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 6)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+16}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+17}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+18}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+19}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+20}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+21}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+22}}</div>
                             </td>
                         </tr>
                     @endif
                     @if($firstDay == 0)
                         <tr>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+15}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+16}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+17}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+18}}</div>
                             </td>
                             <td class="std">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+19}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+20}}</div>
                             </td>
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+21}}</div>
                             </td>
                         </tr>
                     @endif
                 @endfor
                 @for($i = 1;$i < 2;$i++)
                     @if($firstDay == 1)
                         <tr>
                             @if($i+28 <= $lastDay)
                             <td class="std std-task-day">
                                 <p>

                                     10-00 - 12-00 <a href="№">№ 33</a> <br>

                                 </p>
                                 <div class="std-day">{{$i+28}}</div>
                             </td>
                             @endif
                             @if($i+28 > $lastDay)
                                     <td class="std std-task-day">
                                         <p>
                                             <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                         </p>

                                     </td>
                                 @endif
                                 @if($i+29 <= $lastDay)
                                     <td class="std std-task-day">
                                         <p>

                                             10-00 - 12-00 <a href="№">№ 33</a> <br>

                                         </p>
                                         <div class="std-day">{{$i+29}}</div>
                                     </td>
                                 @endif
                                 @if($i+29 > $lastDay)
                                     <td class="std std-task-day">
                                         <p>
                                             <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                         </p>

                                     </td>
                                 @endif
                                 @if($i+30 <= $lastDay)
                                     <td class="std std-task-day">
                                         <p>

                                             10-00 - 12-00 <a href="№">№ 33</a> <br>

                                         </p>
                                         <div class="std-day">{{$i+30}}</div>
                                     </td>
                                 @endif
                                 @if($i+30 > $lastDay)
                                     <td class="std std-task-day">
                                         <p>
                                             <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                         </p>

                                     </td>
                                 @endif
                         </tr>
                     @endif
                     @if($firstDay == 2)
                         <tr>
                             @if($i+27 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+27}}</div>
                                 </td>
                             @endif
                             @if($i+27 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+28 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+28}}</div>
                                 </td>
                             @endif
                             @if($i+28 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+29 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+29}}</div>
                                 </td>
                             @endif
                             @if($i+29 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                                 @if($i+30 <= $lastDay)
                                     <td class="std std-task-day">
                                         <p>

                                             10-00 - 12-00 <a href="№">№ 33</a> <br>

                                         </p>
                                         <div class="std-day">{{$i+30}}</div>
                                     </td>
                                 @endif
                                 @if($i+30 > $lastDay)
                                     <td class="std std-task-day">
                                         <p>
                                             <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                         </p>

                                     </td>
                                 @endif
                         </tr>
                     @endif
                     @if($firstDay == 3)
                         <tr>
                             @if($i+26 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+26}}</div>
                                 </td>
                             @endif
                             @if($i+26 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+27 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+27}}</div>
                                 </td>
                             @endif
                             @if($i+27 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+28 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+28}}</div>
                                 </td>
                             @endif
                             @if($i+28 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+29 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+29}}</div>
                                 </td>
                             @endif
                             @if($i+29 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                                 @if($i+30 <= $lastDay)
                                     <td class="std std-task-day">
                                         <p>

                                             10-00 - 12-00 <a href="№">№ 33</a> <br>

                                         </p>
                                         <div class="std-day">{{$i+30}}</div>
                                     </td>
                                 @endif
                                 @if($i+30 > $lastDay)
                                     <td class="std std-task-day">
                                         <p>
                                             <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                         </p>
                                     </td>
                                 @endif
                         </tr>
                     @endif
                     @if($firstDay == 4)
                         <tr>
                             @if($i+25 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+25}}</div>
                                 </td>
                             @endif
                             @if($i+25 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+26 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+26}}</div>
                                 </td>
                             @endif
                             @if($i+26 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+27 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+27}}</div>
                                 </td>
                             @endif
                             @if($i+27 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+28 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+28}}</div>
                                 </td>
                             @endif
                             @if($i+28 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+29 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+29}}</div>
                                 </td>
                             @endif
                             @if($i+29 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>
                                 </td>
                             @endif
                                 @if($i+30 <= $lastDay)
                                     <td class="std std-task-day">
                                         <p>

                                             10-00 - 12-00 <a href="№">№ 33</a> <br>

                                         </p>
                                         <div class="std-day">{{$i+30}}</div>
                                     </td>
                                 @endif
                                 @if($i+30 > $lastDay)
                                     <td class="std std-task-day">
                                         <p>
                                             <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                         </p>
                                     </td>
                                 @endif
                         </tr>
                     @endif
                     @if($firstDay == 5)
                         <tr>
                             @if($i+24 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+24}}</div>
                                 </td>
                             @endif
                             @if($i+24 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+25 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+25}}</div>
                                 </td>
                             @endif
                             @if($i+25 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+26 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+26}}</div>
                                 </td>
                             @endif
                             @if($i+26 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+27 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+27}}</div>
                                 </td>
                             @endif
                             @if($i+27 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+28 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+28}}</div>
                                 </td>
                             @endif
                             @if($i+28 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>
                                 </td>
                             @endif
                             @if($i+29 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+29}}</div>
                                 </td>
                             @endif
                             @if($i+29 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>
                                 </td>
                             @endif
                                 @if($i+30 <= $lastDay)
                                     <td class="std std-task-day">
                                         <p>

                                             10-00 - 12-00 <a href="№">№ 33</a> <br>

                                         </p>
                                         <div class="std-day">{{$i+30}}</div>
                                     </td>
                                 @endif
                                 @if($i+30 > $lastDay)
                                     <td class="std std-task-day">
                                         <p>
                                             <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                         </p>
                                     </td>
                                 @endif
                         </tr>
                     @endif
                     @if($firstDay == 6)
                         <tr>
                             @if($i+23 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+23}}</div>
                                 </td>
                             @endif
                             @if($i+23 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+24 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+24}}</div>
                                 </td>
                             @endif
                             @if($i+24 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+25 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+25}}</div>
                                 </td>
                             @endif
                             @if($i+25 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+26 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+26}}</div>
                                 </td>
                             @endif
                             @if($i+26 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+27 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+27}}</div>
                                 </td>
                             @endif
                             @if($i+27 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>
                                 </td>
                             @endif
                             @if($i+28 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+28}}</div>
                                 </td>
                             @endif
                             @if($i+28 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>
                                 </td>
                             @endif
                             @if($i+29 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+29}}</div>
                                 </td>
                             @endif
                             @if($i+29 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>
                                 </td>
                             @endif
                         </tr>
                     @endif
                     @if($firstDay == 0)
                         <tr>
                             @if($i+22 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+22}}</div>
                                 </td>
                             @endif
                             @if($i+22 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+23 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+23}}</div>
                                 </td>
                             @endif
                             @if($i+23 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+24 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+24}}</div>
                                 </td>
                             @endif
                             @if($i+24 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+25 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+25}}</div>
                                 </td>
                             @endif
                             @if($i+25 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+26 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+26}}</div>
                                 </td>
                             @endif
                             @if($i+26 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>
                                 </td>
                             @endif
                             @if($i+27 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+27}}</div>
                                 </td>
                             @endif
                             @if($i+27 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>
                                 </td>
                             @endif
                             @if($i+28 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+28}}</div>
                                 </td>
                             @endif
                             @if($i+28 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>
                                 </td>
                             @endif
                         </tr>
                     @endif
                 @endfor
                 @for($i = 1;$i < 2;$i++)
                     @if($firstDay == 6)
                         <tr>
                             @if($i+30 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+30}}</div>
                                 </td>
                             @endif
                             @if($i+30 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                         </tr>
                     @endif
                     @if($firstDay == 0)
                         <tr>
                             @if($i+29 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+29}}</div>
                                 </td>
                             @endif
                             @if($i+29 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                             @if($i+30 <= $lastDay)
                                 <td class="std std-task-day">
                                     <p>

                                         10-00 - 12-00 <a href="№">№ 33</a> <br>

                                     </p>
                                     <div class="std-day">{{$i+30}}</div>
                                 </td>
                             @endif
                             @if($i+30 > $lastDay)
                                 <td class="std std-task-day">
                                     <p>
                                         <strong>МЕСЯЦ КОНЧИЛСЯ</strong>
                                     </p>

                                 </td>
                             @endif
                         </tr>
                     @endif
                 @endfor
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
