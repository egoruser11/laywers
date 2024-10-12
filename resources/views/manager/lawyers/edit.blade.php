@extends('manager.layout.app')

@section('title', 'Редактирование юриста')

@section('content-title', 'Редактирование юриста № ' . $lawyer->id)

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    @if(session()->has('error_message'))
                                        <p class="text-danger">{{session('error_message')}}</p>
                                    @endif
                                    @if(session()->has('message'))
                                        <p class="text-success">{{session('message')}}</p>
                                    @endif
                                    <form method="post" action="{{route('manager.lawyers.update',[$lawyer->id])}}"
                                          class="form form-horizontal" id="profileForm">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>ФИО</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" id="profileSurname"
                                                                   value="{{$lawyer->name}}"
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
                                                            <input type="text" id="profileSurname"
                                                                   value="{{$lawyer->login}}"
                                                                   autocomplete="off"
                                                                   class="form-control" name="login" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>Статус</span>
                                                        </div>
                                                        <div class="col-sm-6 col-md-3">
                                                            <select class="form-control filter-select"
                                                                    autocomplete="off"
                                                                    name="status" style="width: 100%;">
                                                                @foreach($statuses as $key => $statusName)
                                                                    <option value="{{ $key }}"
                                                                            @if($lawyer->account == $key)selected @endif> {{ $statusName}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn btn-primary mr-1 mb-1"
                                                            id="profileBtn">
                                                        Сохранить
                                                    </button>
                                                </div>
                                            </div>

                                </div>
                                    </form>
                        </div>
                                <div class="col-md-6">
                                <h3>Заявки</h3>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Дата</th>
                                            <th>Статус</th>
                                            <th>Тема</th>
                                            <th>Дата и время начала работы</th>
                                            <th>Менеджер</th>
                                        </tr>
                                        </thead>

                                        @foreach($lawyer->lawyerFutureApplications as $application)
                                            <tr>
                                                <td>{{$application->id}}</td>
                                                <td>{{$application->format_start_at}}</td>
                                                <td>{{$application->status_name}}</td>
                                                <td>{{optional($application->topic)->name }}</td>
                                                <td>{{$application->work_start_date_and_time}}</td>
                                                <td>
                                                    @if($application->manager_id)
                                                        <a href=""
                                                           target="_blank">{{optional($application->manager)->name}}</a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach

                                    </table>


                                </div>
                            </div>

                            </div>
                        <div>


                        <h4 class="card-title mt-2 mb-2">Смена пароля</h4>

                        <form action="{{route('manager.lawyers.update.password',[$lawyer->id])}}" method="post"
                              class="form form-horizontal" id="passwordForm">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span class="">Новый пароль*</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="password" id="newPassword" class="form-control"
                                                       name="password" placeholder="не менее 8 символов">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>Повтор пароля*</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="password" id="newPasswordConfirmation" class="form-control"
                                                       name="password_confirmation" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1" id="passwordBtn">
                                            Сохранить
                                        </button>
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
