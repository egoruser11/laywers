@extends('admin.layout.app')

@section('title', 'Редактирование пользователя')

@section('content-title', 'Редактирование пользователя № ' . $user->id)

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            @if(session()->has('error_message'))
                                <p class="text-danger">{{session('error_message')}}</p>
                            @endif
                                @if(session()->has('message'))
                                    <p class="text-success">{{session('message')}}</p>
                                @endif
                            <form method="post" action="{{route('admin.users.update',[$user->id])}}"
                                  class="form form-horizontal" id="profileForm">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Роль</span>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <select class="form-control filter-select" autocomplete="off"
                                                            name="role" style="width: 100%;">
                                                        @foreach($roles as $key => $roleName)
                                                            <option value="{{ $key  }}"
                                                                    @if($user->role == $key)selected @endif> {{ $roleName}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Статус</span>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <select class="form-control filter-select" autocomplete="off"
                                                            name="status" style="width: 100%;">
                                                        @foreach($statuses as $key => $statusName)
                                                            <option value="{{ $key  }}"
                                                                    @if($user->account == $key)selected @endif> {{ $statusName}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>ФИО</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="profileSurname" value="{{$user->name}}"
                                                           autocomplete="off"
                                                           class="form-control" name="name" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Логин</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="profileSurname" value="{{$user->login}}"
                                                           autocomplete="off"
                                                           class="form-control" name="login" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1" id="profileBtn">
                                                Сохранить
                                            </button>
                                        </div>
                            </form>

                            <h4 class="card-title mt-2 mb-2">Смена пароля</h4>

                            <form action="{{route('admin.users.update.password',[$user->id])}}"  method="post" class="form form-horizontal" id="passwordForm">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span class="">Новый пароль*</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="password" id="newPassword" class="form-control" name="password" placeholder="не менее 8 символов">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Повтор пароля*</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="password" id="newPasswordConfirmation" class="form-control" name="password_confirmation" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1" id="passwordBtn">Сохранить</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>


                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
    </script>
@endsection
