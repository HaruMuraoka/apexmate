@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}
        <h1>グループ一覧</h1>
        <div class="col-sm-12">
            {{-- グループ一覧 --}}
            @include('groups.groups')
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Let's play with APEXmate</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection