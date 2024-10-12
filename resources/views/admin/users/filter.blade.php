<form role="form" method="get" action="{{route('admin.users.index')}}">
    <br>
    <div class="row">
        <div class="col-sm-6 col-md-2">
            <input type="text" style="width: 100%;" autocomplete="off"
                   value="{{$filter['search']}}"
                   placeholder="Фильтр по ФИО или логину"
                   name="search" class="form-control">
        </div>
        <div class="col-sm-6 col-md-2">
            <select class="form-control filter-select" autocomplete="off"
                    name="status" style="width: 100%;">
                <option value="">Все аккаунты</option>
                @foreach($statuses as $key => $statusName)
                    <option value="{{ $key }}"
                            @if($key == $filter['status']) selected @endif> {{ $statusName }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-6 col-md-2">
            <select class="form-control filter-select" autocomplete="off"
                    name="role" style="width: 100%;">
                <option value="">Все роли</option>
                @foreach($roles as $key => $roleName)
                    <option value="{{$key}}"
                            @if($key == $filter['role']) selected @endif> {{ $roleName }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-6 col-md-2">
            <select class="form-control filter-select" autocomplete="off" name="sort" style="width: 100%;">
                <option value="date" @if($filter['sort'] == 'date) selected @endif>Сорт по дате регестрации</option>
                <option value="account" @if($filter['sort'] == 'account') selected @endif>Сорт. по статусам</option>
            </select>
        </div>
        <div class="col-sm-6 col-md-2">
            <button class="btn btn-default btn-outline" title="Применить фильтр"
                    style="width: 20%;" type="submit">
                <i class="fa fa-search"></i>
            </button>
            <a href="{{route('admin.users.index')}}"
               class="btn btn-default btn-outline ml-2" title="Сбросить фильтр">
                <i class="fa fa-eraser"></i>
            </a>
        </div>
    </div>
</form>
