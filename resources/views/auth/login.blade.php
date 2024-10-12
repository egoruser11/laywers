@extends('auth.layouts.app')

@section('title', 'Вход в личный кабинет')

@section('content')
    <section class="row flexbox-container">
        <div class="col-xl-8 col-11 d-flex justify-content-center">
            <div class="card bg-authentication rounded-0 mb-0">
                <div class="row m-0">
                    {{--  <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">--}}
                    {{--  <img src="{{ asset('assets/images/pages/login.png') }}" alt="branding logo">--}}
                    {{--  </div>--}}
                    <div class="col-lg-12 col-12 p-0">
                        <div class="card rounded-0 mb-0 px-2">
                            <div class="card-header pb-1">
                                <div class="card-title" style="margin: auto;">
                                    <a href="{{ route('main') }}">{{ config('app.name') }}</a>
                                </div>
                            </div>
                            <p class="px-2 text-center">Вход в личный кабинет</p>
                            <div class="card-content">
                                <p class="card-body pt-1">
                                <form action="" id="loginForm" method="post">
                                    @csrf
                                    @if($errors->any())
                                        <p class="text-danger">
                                            @foreach ($errors->all() as $error)
                                                {{ $error }}
                                            @endforeach
                                        </p>
                                    @endif

                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                        <input type="text" name="login" class="form-control" id="email" placeholder="Логин"
                                               required @if(app()->environment('local')) value="admin" @endif autocomplete="off">
                                        <div class="form-control-position">
                                            <i class="feather icon-mail"></i>
                                        </div>
                                        <label for="user-email">Логин</label>
                                    </fieldset>

                                    <fieldset class="form-label-group position-relative has-icon-left">
                                        <input type="password" name="password" class="form-control" id="password"
                                               placeholder="Пароль" required @if(app()->environment('local')) value="111111" @endif autocomplete="off">
                                        <div class="form-control-position">
                                            <i class="feather icon-lock"></i>
                                        </div>
                                        <label for="user-password">Пароль</label>
                                    </fieldset>
                                    <div class="form-group d-flex justify-content-between align-items-center">
                                        <div class="text-left">
                                            <fieldset class="checkbox">
                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" name="remember" id="remember" checked>
                                                    <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    <span class="">Запомнить</span>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="text-right">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block" id="loginBtn">Войти
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="login-footer text-center">
                            <a href="{{ route('main') }}"
                               class="btn btn-link btn-inline">На главную</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
