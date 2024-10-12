@extends('manager.layout.app')


@section('title', 'Новый суд')

@section('content-title', 'Новый суд')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            @if($errors->any())
                                <div style="color: red;">
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach
                                </div>
                            @endif
                            <form method="post" action="{{route('manager.lawyers.store')}}" class="form form-horizontal"
                                  id="profileForm">
                                @csrf
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>ФИО юриста</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="profileSurname" value="" autocomplete="off"
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
                                                    <input type="text" id="profileName" value="" autocomplete="off"
                                                           class="form-control" name="login" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Пароль</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="password" id="profileMiddleName" value=""
                                                           autocomplete="off" class="form-control" name="phone"
                                                           placeholder="">
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
                                                        @foreach($statuses as $key => $status)
                                                            <option value="{{ $key }}"> {{ $status }}</option>
                                                        @endforeach
                                                    </select>
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
