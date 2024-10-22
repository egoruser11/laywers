@extends('manager.layout.app')

@section('title', 'Помощь')

@section('content-title', 'Помощь')

@section('content')
    @if(session()->has('message'))
        <p class="text-success">{{session('message')}}</p>
    @endif
    <a href="{{route('manager.tickets.create')}}" class="btn btn-outline-primary waves-effect">Новое
        обращение</a>

    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Кому направлено</th>
                <th>Описание</th>
                <th>Кол-во сообщений</th>
                <th></th>
            </tr>
            <tbody>
            @foreach($tickets as $ticket)
                <tr>
                    <td>{{$ticket->id}}</td>
                    <td>{{optional($ticket->admin)->name}}</td>
                    <td>{{$ticket->description}}</td>
                    <td>{{$ticket->messages_count}}@if($ticket->unread_messages_count) <span class="text-danger">( + {{$ticket->unread_messages_count}})</span>@endif</td>
                    <td><a href="{{route('manager.tickets.edit',$ticket->id)}}"
                           class="btn btn-outline-dark waves-effect">Открыть чат обращения </a></td>
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
