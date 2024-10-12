@extends('anager.layout.app')

@section('title', 'Новый клиент')

@section('content-title', 'Новый клиент')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form method="post" action="{{route('admin.clients.store')}}" class="form form-horizontal"
                                  id="profileForm">
                                @csrf
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Фамилия</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="profileSurname" value="" autocomplete="off"
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
                                            <input type="text" id="profileSurname" value="" autocomplete="off"
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
                                            <input type="text" id="profileSurname" value="" autocomplete="off"
                                                   class="form-control" name="patronymic" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Дата рождения</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="datetime-local" id="profileName" value="" autocomplete="off"
                                                   class="form-control" name="date_born" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Документ</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="profileSurname" value="" autocomplete="off"
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
                                            <input type="email" id="profileSurname" value="" autocomplete="off"
                                                   class="form-control" name="email" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Номер документа</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="string" id="profileSurname" value="" autocomplete="off"
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
                                            <input type="text" id="profileSurname" value="" autocomplete="off"
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
                                            <input type="text" id="profileSurname" value="" autocomplete="off"
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
                                            <input type="text" id="profileSurname" value="" autocomplete="off"
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
                                            <input type="text" id="profileSurname" value="" autocomplete="off"
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
                                            <input type="text" id="profileSurname" value="" autocomplete="off"
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
