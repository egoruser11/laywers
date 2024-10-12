@extends('admin.layout.app')

@section('title', 'Темы заявок')

@section('content-title', 'Суды')

@section('content')
    @if(session()->has('message'))
        <p class="text-success">{{session('message')}}</p>
    @endif
    <a href="{{route('admin.courts.create')}}" class="btn btn-outline-primary waves-effect">Новый
        суд</a>
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

            @foreach($courts as $court)
                <tr>
                    <td>{{$court->id}}</td>
                    <td>{{$court->name}}</td>
                    <td><a href="{{route('admin.courts.edit',$court->id)}}"
                           class="btn btn-outline-dark btn-sm waves-effect">Редактировать</a></td>
                    <td><a href="{{route('admin.courts.destroy',$court->id)}}"
                           class="btn btn-outline-dark btn-sm waves-effect">Удалить</a></td>
            @endforeach

        </table>


    </div>

@endsection

@section('script')
    <script>
    </script>
@endsection
