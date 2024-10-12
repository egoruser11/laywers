@extends('lawyer.layout.app')

@section('title', 'Новая заявка')

@section('content-title', 'Новая заявка')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form method="post" action="{{route('admin.applications.store')}}" class="form form-horizontal"
                                  id="profileForm">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Имя клиента</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="profileSurname" value="" autocomplete="off" class="form-control" name="name" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Тип заявки</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <select class="form-control filter-select" autocomplete="off"
                                                            name="type" style="width: 100%;">
                                                        <option value="{{null}}">Выберете тип</option>
                                                        @foreach($types as $key => $type)
                                                            <option value="{{$key}}"> {{ $type }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Телефон</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="profileMiddleName" value="" autocomplete="off" class="form-control" name="phone" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Дата встрчеи выезда
                                                        (в офисе)</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="date" id="profileMiddleName" value="" autocomplete="off" class="form-control" name="meeting_date" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Дата начала работы и время</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="datetime-local" id="profileName" value="" autocomplete="off" class="form-control" name="work_start_date_and_time" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Количество часов работы</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="profileName" value="" autocomplete="off" class="form-control" name="count_hours_work" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Стоимость в рублях</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="profileName" value="" autocomplete="off" class="form-control" name="price" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Тема</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <select class="form-control filter-select" autocomplete="off"
                                                            name="topic_id" style="width: 100%;">
                                                        @foreach($topics as $topic)
                                                            <option value="{{$topic->id}}" > {{ $topic->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Менеджер</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <select class="form-control filter-select" autocomplete="off"
                                                            name="manager_id" style="width: 100%;">
                                                        <option value="{{null}}">Выберете менеджера </option>
                                                        @foreach($managers as $manager)
                                                            <option value="{{$manager->id}}" >{{$manager->id}} - {{ $manager->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Юрист</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <select class="form-control filter-select" autocomplete="off"
                                                            name="lawyer_id" style="width: 100%;">
                                                        <option value="{{null}}">Выберете юриста </option>
                                                        @foreach($lawyers as $lawyer)
                                                            <option value="{{$lawyer->id}}" >{{$lawyer->id}} - {{ $lawyer->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Описание</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="profileMiddleName" value="" autocomplete="off" class="form-control" name="description" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Пометки менеджера</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="profileMiddleName" value="" autocomplete="off" class="form-control" name="manager_notes" placeholder="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1" id="profileBtn">Сохранить</button>
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
