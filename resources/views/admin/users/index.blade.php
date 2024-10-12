@extends('admin.layout.app')

@section('title', 'Пользователи')

@section('content-title', 'Пользователи')

@section('content')

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <a href="{{route('admin.users.create')}}" class="btn btn-outline-primary waves-effect">Новый
                пользователь</a>
            <div class="row mb-2">
                <div class="col-md-12 col-lg-12">
                   @include('admin.users.filter')
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>

                    <tr>
                        <th>ID</th>
                        <th>Аккаунт</th>
                        <th>Логин</th>
                        <th>Фио</th>
                        <th>Роль</th>
                        <th>Регистрация</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(session()->has('message'))
                        <p class="text-success">{{session('message')}}</p>
                    @endif
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td> @if($user->is_active)
                                    <span class="text-success">{{$user->status_name}}</span>
                                @else
                                    <span class="text-danger">{{$user->status_name}}</span>
                                @endif
                            </td>
                            <td>{{$user->login}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->role_name}}</td>
                            <td>{{$user->format_start_at}}</td>
                            <td><a href="{{route('admin.users.edit',$user->id)}}"
                                   class="btn btn-outline-dark btn-sm waves-effect">Редактировать</a></td>
                            <td><a href="{{route('admin.users.destroy',$user->id)}}"
                                   class="btn btn-outline-dark btn-sm waves-effect">Удалить</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Аккаунт</th>
                        <th>Логин</th>
                        <th>Фио</th>
                        <th>Роль</th>
                        <th>Регистрация</th>
                        <th></th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <p>{{ $users->appends(request()->input())->links('vendor.pagination.bootstrap-5') }}</p>
            @endsection

            @section('script')
                <script>
                </script>
@endsection
