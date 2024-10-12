@extends('manager.layout.app')


@section('title', 'Клиенты')

@section('content-title', 'Клиенты')

@section('content')

            <div class="table-responsive">
                <table class="table table-striped">
                    <a href="{{route('manager.clients.create')}}" class="btn btn-outline-primary waves-effect">Новый
                        клиент</a>
                    <thead>
                    <div class="row mb-2">
                        <div class="col-md-12 col-lg-12">
                            <form role="form" method="get" action="{{route('manager.clients.index')}}">
                                <br>
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <input type="text" style="width: 100%;" autocomplete="off"
                                               value="{{$filter['search']}}"
                                               placeholder="Фильтр по ФИО, телефон либо email"
                                               name="search" class="form-control">
                                    </div><div class="col-sm-6 col-md-3">
                                        <select class="form-control filter-select" autocomplete="off" name="sort" style="width: 100%;">
                                            <option value="yes" @if($filter['sort'] == 'yes') selected @endif>Не сорт. по дате регестрации</option>
                                            <option value="no" @if($filter['sort'] == 'no') selected @endif>Сорт по дате регестрации</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <button class="btn btn-default btn-outline" title="Применить фильтр"
                                                style="width: 20%;" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                        <a href="{{route('manager.clients.index')}}"
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
                        <th>Фио</th>
                        <th>Email</th>
                        <th>Телефон</th>
                        <th>Добавлен</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(session()->has('message'))
                        <p class="text-success">{{session('message')}}</p>
                    @endif
                    @foreach($clients as $client)
                        <tr>
                            <td>{{$client->id}}</td>
                            <td>{{$client->full_name}}</td>
                            <td>{{$client->email}}</td>
                            <td>{{$client->phone}}</td>
                            <td>{{$client->created_at}}</td>
                            <td><a href="{{route('manager.clients.edit',$client->id)}}"
                                   class="btn btn-outline-dark btn-sm waves-effect">Редактировать</a></td>
                            <td><a href="{{route('manager.clients.destroy',$client->id)}}"
                                   class="btn btn-outline-dark btn-sm waves-effect">Удалить</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Фио</th>
                        <th>Email</th>
                        <th>Телефон</th>
                        <th>Добавлен</th>
                        <th></th>
                    </tr>
                    </tfoot>
                </table>

            </div>
            <p>{{ $clients->appends(request()->input())->links('vendor.pagination.bootstrap-5') }}</p>
            @endsection

            @section('script')
                <script>
                </script>
@endsection
