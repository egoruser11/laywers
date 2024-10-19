@extends('admin.layout.app')

@section('title', 'Обращение')

@section('content-title', 'Обращение № ' . $ticket->id)

@section('content')
    <div class="row mb-5 mt-2">
        <div class="col-md-8 text-left">
            <h5 class="font-weight-light">Чат с админом</h5>
            <div class="mt-1">
                <div class="comment mb-2 d-flex justify-content-start align-items-center">
                    <div class="avatar mr-50"></div>
                    <div class="user-page-info w-100">
                        @foreach($messages as $message)
                        <h6 class="mb-0">
                            {{$message->user->name}}
                            <span class="text-bold-300 float-right">{{$message->created_at}}</span>
                        </h6>
                        <span class="comment-text"> {{$message->message}}</span>
                            @endforeach()
                    </div>
                </div>
            </div>
            <p id="commentError" style="display: none;"></p>
            <form action="{{route('admin.tickets.update',[$ticket->id])}}" method="post" class="form form-horizontal" id="profileForm">
                @csrf
                <fieldset class="form-label-group mb-1 mt-2">
                    <textarea id="commentDescription" name="message" class="form-control" rows="3" autocomplete="off" placeholder="Ваш комментарий"></textarea>
                    <label for="commentDescription">Введите новое сообщение</label>
                </fieldset>
                <button type="submit" id="sendBtn" class="btn btn-primary waves-effect waves-light">Отправить</button>
            </form>

        </div>
    </div>


@endsection

@section('script')
    <script>
    </script>
@endsection
