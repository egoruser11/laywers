@extends('manager.layout.app')

@section('title', 'Темы заявок')

@section('content-title', 'Темы заявок')

@section('content')
    @if(session()->has('message'))
        <p class="text-success">{{session('message')}}</p>
    @endif
    <a href="{{route('manager.topics.create')}}" class="btn btn-outline-primary waves-effect">Новая
        тема</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            @foreach($topics as $topic)
                <tr>
                    <td>{{$topic->id}}</td>
                    <td>{{$topic->name}}</td>
                    <td><a href="{{route('manager.topics.destroy',$topic->id)}}"
                           class="btn btn-outline-dark btn-sm waves-effect">Удалить</a></td>
                    <td><a href="{{route('manager.topics.edit',$topic->id)}}"
                           class="btn btn-outline-dark btn-sm waves-effect">Редактировать</a></td>
                </tr>


            @endforeach
        </table>


    </div>

@endsection

@section('script')
    <script>
    </script>
@endsection
