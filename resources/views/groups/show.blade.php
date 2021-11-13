@extends('layouts.app')

@section('content')
   <h1>{{ $name }}</h1>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route' => 'chats.store']) !!}
                <div class="form-group">
                    {!! Form::label('content', 'チャット') !!}
                    {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '3']) !!}
                　　{!! Form::hidden('group_id', $group_id) !!}
                　　{!! Form::hidden('user_id', $user_id) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('送る', ['class' => 'btn btn-primary btn-block']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    @if (count($chats) > 0)
        <ul class="list-unstyled">
            @foreach ($chats as $chat)
                    <li class="mb-4 mt-4">
                        <div class>
                            {{-- 投稿内容 --}}
                                <p class="h5">{!! nl2br(e($chat->user->apex_id)) !!} {!! nl2br(e($chat->created_at)) !!}</p>
                                <p class="h5">{!! nl2br(e($chat->content)) !!}</p>
                        </div>
                    </li>
            @endforeach
        </ul>
        {{-- ページネーションのリンク --}}
        {{ $chats->links() }}
    @endif
@endsection