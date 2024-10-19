@extends('manager.layout.app')


@section('title', 'Нове обращение в поддержку')

@section('content-title', 'Новое обращение в поддержку')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form method="post" action="{{route('manager.tickets.store')}}" class="form form-horizontal"
                                  id="profileForm">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Ваше сообщение
                                                        </span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="profileMiddleName" value=""
                                                           autocomplete="off" class="form-control" name="description"
                                                           placeholder="">
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
                                                            name="topic" style="width: 100%;">
                                                        @foreach($topics as $key => $topic)
                                                            <option value="{{$key}}" > {{ $topic }}</option>
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
