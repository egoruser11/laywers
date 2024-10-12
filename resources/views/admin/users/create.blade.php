@extends('admin.layout.app')

@section('title', 'Новый пользователь')

@section('content-title', 'Новый пользователь')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-content">
                        @if($errors->any())
                            <div style="color: red;">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
                        @endif
                        <div class="card-body">
                            <form method="post" action="{{route('admin.users.store')}}" class="form form-horizontal"
                                  id="profileForm">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Роль*</span>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <select class="form-control filter-select" autocomplete="off"
                                                            name="role" style="width: 100%;">
                                                        @foreach($roles as $key => $roleName)
                                                            <option value="{{ $key  }}" @if($key == old('role')) selected @endif> {{ $roleName }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Статус*</span>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <select class="form-control filter-select" autocomplete="off"
                                                            name="status" style="width: 100%;">
                                                        @foreach($statuses as $key => $statusName)
                                                            <option value="{{ $key  }}" @if($key == old('status')) selected @endif> {{ $statusName}}</option>
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
                                                    <input type="text" id="profileSurname" value="{{old('name')}}" autocomplete="off"
                                                           class="form-control" name="name" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Пароль</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="profileSurname" value="{{old('password')}}" autocomplete="off"
                                                           class="form-control" name="password" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Логин</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="profileSurname" value="{{old('login')}}" autocomplete="off"
                                                           class="form-control" name="login" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1" id="profileBtn">
                                            Сохранить
                                        </button>
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
