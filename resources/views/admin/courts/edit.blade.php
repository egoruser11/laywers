@extends('admin.layout.app')

@section('title', 'Редактирование суда')

@section('content-title', 'Редактирование суда № ' . $court->id)

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form method="post" action="{{route('admin.courts.update',[$court->id])}}"  class="form form-horizontal" id="profileForm">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Тема</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="profileSurname" value="{{$court->name}}" autocomplete="off" class="form-control" name="name" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                            </form>
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary mr-1 mb-1" id="profileBtn">Сохранить</button>
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
