@extends('lawyer.layout.app')

@section('title', 'Редактирование заявки')

@section('content-title', 'Редактирование заявки № ' . $application->id)

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
                            <form method="post" action="{{route('lawyer.applications.update',[$application->id])}}"  class="form form-horizontal" id="profileForm">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Имя клиента</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="profileSurname" value="{{$application->name}}" autocomplete="off" class="form-control" name="name" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Клиент</span>
                                                </div>
                                                @if($application->client_id)<div class="col-md-8">
                                                    <input type="text" id="profileSurname" value="{{$application->client->full_name}}" autocomplete="off" class="form-control" name="name" placeholder="">
                                                </div>@endif

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Статус</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <select class="form-control filter-select" autocomplete="off"
                                                            name="status" style="width: 100%;">
                                                        @foreach($statuses as $key => $statusName)
                                                            <option value="{{ $key }}" @if($application->status == $key)selected @endif> {{ $statusName }}</option>
                                                        @endforeach
                                                    </select>
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
                                                            name="application_type" style="width: 100%;">
                                                        @foreach($types as $key => $type)
                                                            <option value="{{ $key }}" @if($application->application_type == $key)selected @endif> {{ $type }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Дата</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="datetime-local" id="profileName" value="{{$application->start_at}}" autocomplete="off" class="form-control" name="date" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Телефон</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="profileMiddleName" value="{{$application->phone}}" autocomplete="off" class="form-control" name="phone" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Дата начала работы и время</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="datetime-local" id="profileName" value="{{$application->work_start_date_and_time}}" autocomplete="off" class="form-control" name="work_start_date_and_time" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Количество часов работы</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="profileName" value="{{$application->count_hours_work}}" autocomplete="off" class="form-control" name="count_hours_work" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Стоимость в рублях</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="profileName" value="{{$application->price}}" autocomplete="off" class="form-control" name="price" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    @if($application->application_type == \App\Models\Application::TYPE_DEPARTURE)<span>Дата выезда</span>@endif
                                                    @if($application->application_type == \App\Models\Application::TYPE_OFFICE)<span>Дата встречи в офисе</span>@endif
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="date" id="profileMiddleName" value="{{$application->meeting_date}}" autocomplete="off" class="form-control" name="meeting_date" placeholder="">
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
                                                            <option value="{{ $topic->id }}" @if($application->topic_id == $topic->id)selected @endif> {{ $topic->name }}</option>
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
                                                        @foreach($managers as $manager)
                                                            <option value="{{ $manager->id }}" @if($application->manager_id == $manager->id)selected @endif>{{$manager->id}} - {{ $manager->name}}</option>
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
                                                        @foreach($lawyers as $lawyer)
                                                            <option value="{{ $lawyer->id }}" @if($application->lawyer_id == $lawyer->id)selected @endif>{{$lawyer->id}} - {{ $lawyer->name}}</option>
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
                                                    <input type="text" id="profileMiddleName" value="{{$application->description}}" autocomplete="off" class="form-control" name="description" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Дата и время окончания</span>
                                                </div>
                                                <div class="col-md-8">
                                                    {{ $application->end_work_date}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Пометки менеджера</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="profileMiddleName" value="{{$application->manager_notes}}" autocomplete="off" class="form-control" name="manager_notes" placeholder="">
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
                            <div class="col-md-3">
                                <h3>Клиент</h3>
                                <h4>Id  : {{optional($application->client)->id}}</h4>
                                <h4>ФИО :  {{($application->client)->full_name ?? ""}}</h4>
                                <h4>Документ : {{($application->client)->document ?? ""}}</h4>
                                <h4>Почта  : {{($application->client)->email ?? ""}}</h4>
                                <h4>Дата рождения : {{($application->client)->date_born ?? ""}}</h4>
                                <h4>Выдан : {{($application->client)->issused_by ?? ""}}</h4>
                                <h4>Адрес прописки : {{($application->client)->residential_address ?? ""}}</h4>
                                <h4>Прочая информация : {{($application->client)->additional_information ?? ""}}</h4>
                                <h4>Номер документа : {{($application->client)->phone ?? ""}}</h4>
                        </div>
                                <div class="col-md-3">
                                    <h3>Юрист</h3>
                                    <h4>Id  : {{($application->lawyer)->id ?? ""}}</h4>
                                    <h4>ФИО :  {{($application->lawyer)->name ?? ""}}</h4>
                                    <h4>Время работы :{{config('lawyer.schedule.start_at')}}-{{config('lawyer.schedule.end_at')}} по будням</h4>
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
