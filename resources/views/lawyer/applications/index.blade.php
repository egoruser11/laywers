@extends('lawyer.layout.app')

@section('title', 'Заявки')

@section('content-title', 'Заявки')

@section('content')

    <div class="table-responsive">
        <table class="table table-striped">
            <a href="{{route('lawyer.applications.create')}}" class="btn btn-outline-primary waves-effect">Новая
                заявка</a>
            <thead>
            <div class="row mb-2">
                <div class="col-md-12 col-lg-12">
                    <form role="form" method="get" action="{{route('lawyer.applications.index')}}">
                        <br>
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <input type="text" style="width: 100%;" autocomplete="off"
                                       value="{{$filter['search']}}"
                                       placeholder="Фильтр по телефону , или фамилии клиента , или менеджеру"
                                       name="search" class="form-control">
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <select class="form-control filter-select" autocomplete="off"
                                        name="status" style="width: 100%;">
                                    <option value="">Все статусы</option>
                                    @foreach($statuses as $key => $statusName)
                                        <option value="{{ $key }}"
                                                @if($key == $filter['status']) selected @endif> {{ $statusName }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <select class="form-control filter-select" autocomplete="off"
                                        name="topic" style="width: 100%;">
                                    <option value="">Все темы</option>
                                    @foreach($topics as $currentTopic)
                                        <option value="{{ $currentTopic->id }}"
                                                @if($currentTopic->id == $filter['topic']) selected @endif> {{ $currentTopic->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <button class="btn btn-default btn-outline" title="Применить фильтр"
                                        style="width: 20%;" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                                <a href="{{route('lawyer.applications.index')}}"
                                   class="btn btn-default btn-outline ml-2" title="Сбросить фильтр">
                                    <i class="fa fa-eraser"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <tr>
                <th>ID</th>
                <th>Имя клиента</th>
                <th>Дата</th>
                <th>Статус</th>
                <th>Телефон</th>
                <th>Клиент</th>
                <th>Тема</th>
                <th>Менеджер</th>
                <th>Описание</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @if(session()->has('message'))
                <p class="text-success">{{session('message')}}</p>
            @endif
            @foreach($applications as $application)
                <tr>
                    <td>{{$application->id}}</td>
                    <td>{{$application->name}}</td>
                    <td>{{$application->format_start_at}}</td>
                    <td>{{$application->status_name}}</td>
                    <td>{{$application->phone}}</td>
                    <td>
                        @if($application->client_id)
                            <a href="#"
                               target="_blank">{{optional($application->client)->full_name}}</a>
                        @endif
                    </td>
                    <td>{{optional($application->topic)->name }}</td>
                    <td>
                        @if($application->manager_id)
                            <a href="#"
                               target="_blank">{{optional($application->manager)->name}}</a>
                        @endif
                    </td>
                    <td>{{$application->description}}</td>
                    <td><a href="{{route('lawyer.applications.edit',$application->id)}}"
                           class="btn btn-outline-dark btn-sm waves-effect">Редактировать</a></td>
                    <td><a href="{{route('lawyer.applications.destroy',$application->id)}}"
                           class="btn btn-outline-dark btn-sm waves-effect">Удалить</a></td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>Имя клиента</th>
                <th>Дата</th>
                <th>Статус</th>
                <th>Телефон</th>
                <th>Клиент</th>
                <th>Тема</th>
                <th>Менеджер</th>
                <th>Юрист</th>
                <th>Описание</th>
                <th></th>
            </tr>
            </tfoot>
        </table>

    </div>
    <p>{{ $applications->appends(request()->input())->links('vendor.pagination.bootstrap-5') }}</p>
@endsection

@section('script')
    <script>
    </script>
@endsection
