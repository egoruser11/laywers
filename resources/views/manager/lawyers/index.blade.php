@extends('manager.layout.app')


@section('title', 'Юристы')

@section('content-title', 'Юристы')

@section('content')
    @if(session()->has('message'))
        <p class="text-success">{{session('message')}}</p>
    @endif
    <a href="{{route('manager.lawyers.create')}}" class="btn btn-outline-primary waves-effect">Новый
        юрист</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Статус</th>
                <th>Логин</th>
                <th>Зарегестрирован</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            @foreach($lawyers as $lawyer)
                <tr>

                    <td>{{$lawyer->id}}</td>
                    <td>{{$lawyer->name}}</td>
                    <td>{{$lawyer->account}}</td>
                    <td>{{$lawyer->login}}</td>
                    <td>{{$lawyer->start_at}}</td>
                    <td><a href="{{route('manager.lawyers.edit',$lawyer->id)}}"
                           class="btn btn-outline-dark btn-sm waves-effect">Редактировать</a></td>
                    <td><a href="{{route('manager.lawyers.destroy',$lawyer->id)}}"
                           class="btn btn-outline-dark btn-sm waves-effect">Удалить</a></td>
            @endforeach

        </table>
    </div>

@endsection

@section('script')
    <script>
    </script>
@endsection
