@extends('manager.layout.app')


@section('title', 'Ваш профиль')

@section('content-title', 'Ваш профиль')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Основные данные</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            @if(session()->has('error_message'))
                                <p class="text-danger">{{session('error_message')}}</p>
                            @endif
                                @if(session()->has('message'))
                                    <p class="text-success">{{session('message')}}</p>
                                @endif
                            <form action="{{route('manager.profile.update')}}"  method="post" class="form form-horizontal" id="profileForm">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>ФИО</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="profileSurname" value="{{$user->name}}" autocomplete="off" class="form-control" required name="name" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Логин</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="profileName" value="{{$user->login}}" autocomplete="off" readonly class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1" id="profileBtn">Сохранить</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <h4 class="card-title mt-2 mb-2">Смена пароля</h4>

                            <form action="{{route('manager.profile.update.password')}}"  method="post" class="form form-horizontal" id="passwordForm">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Текущий пароль*</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="password" id="currentPassword" class="form-control" name="current_password" placeholder="">
                                                </div>
                                            </div>
                                        </div>
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
    </section>
@endsection

@section('script')
    <script>
    </script>
@endsection
