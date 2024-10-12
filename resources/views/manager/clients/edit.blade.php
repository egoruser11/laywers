@extends('manager.layout.app')

@section('title', 'Редактирование клиента')

@section('content-title', 'Редактирование клиента № ' . $client->id)

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
                            <form method="post" action="{{route('manager.clients.update',[$client->id])}}"  class="form form-horizontal" id="profileForm">
                                @csrf
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>ФИО</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="profileSurname" value="{{$client->full_name}}" autocomplete="off"
                                                   class="form-control" name="full_name" placeholder="" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Фамилия</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="profileSurname" value="{{$nameAndSurname[0]}}" autocomplete="off"
                                                   class="form-control" name="surname" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Имя</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="profileSurname" value="{{$nameAndSurname[1]}}" autocomplete="off"
                                                   class="form-control" name="name" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Отчество</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="profileSurname" value="{{$client->patronymic}}" autocomplete="off"
                                                   class="form-control" name="patronymic" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Документ</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="profileSurname" value="{{$client->document}}" autocomplete="off"
                                                   class="form-control" name="document" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Email</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="email" id="profileSurname" value="{{$client->email}}" autocomplete="off"
                                                   class="form-control" name="email" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Дата рождения</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="datetime-local" id="profileName" value="{{$client->date_born}}" autocomplete="off"
                                                   class="form-control" name="date_born" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Номер документа</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="string" id="profileSurname" value="{{$client->document_number}}" autocomplete="off"
                                                   class="form-control" name="document_number" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Кем выдан</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="profileSurname" value="{{$client->issued_by}}" autocomplete="off"
                                                   class="form-control" name="issued_by" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Адрес проживания</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="profileSurname" value="{{$client->residential_address}}" autocomplete="off"
                                                   class="form-control" name="residential_address" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Адрес прописки</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="profileSurname" value="{{$client->registration_address}}" autocomplete="off"
                                                   class="form-control" name="registration_address" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Прочая информация</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="profileSurname" value="{{$client->additional_information}}" autocomplete="off"
                                                   class="form-control" name="additional_information" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Номер телефона</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="profileSurname" value="{{$client->phone}}" autocomplete="off"
                                                   class="form-control" name="phone" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1" id="profileBtn">
                                        Сохранить
                                    </button>
                                </div>
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
                                            <th>Юрист</th>
                                        </tr>
                                        </thead>

                                        @foreach($client->applications as $application)
                                            <tr>
                                                <td>{{$application->id}}</td>
                                                <td>{{$application->format_start_at}}</td>
                                                <td>{{$application->status_name}}</td>
                                                <td>{{optional($application->topic)->name }}</td>
                                                <td>
                                                    @if($application->lawyer_id)
                                                        <a href="{{route('manager.lawyers.edit',[$application->lawyer_id])}}"
                                                           target="_blank">{{optional($application->lawyer)->name}}</a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach

                                    </table>


                                </div>

                            </div>

                        </div>
                        </form>
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
