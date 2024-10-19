@extends('admin.layout.app')

@section('title', 'Помощь')

@section('content-title', 'Помощь')

@section('content')
    @if(session()->has('message'))
        <p class="text-success">{{session('message')}}</p>
    @endif
    

    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Кому направлено</th>
                <th>От кого направлено</th>
                <th>Описание</th>
                <th></th>
            </tr>
            <tbody>
            @foreach($tickets as $ticket)
                <tr>
                    <td>{{$ticket->id}}</td>
                    <td>{{optional($ticket->admin)->name}}</td>
                    <td>{{optional($ticket->user)->name}}</td>
                    <td>{{$ticket->description}}</td>
                    <td>@if(!$ticket->admin_id == null)<a href="{{route('admin.tickets.edit',$ticket->id)}}"
                           class="btn btn-outline-dark waves-effect">Открыть чат обращения</a>@else
                            <a href="{{route('admin.tickets.get',$ticket->id)}}"
                               class="btn btn-outline-dark waves-effect">Взять обращение</a>
                            @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
@section('script')
    <script>
    </script>
@endsection
