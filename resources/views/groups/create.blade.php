@extends('layouts.app')

@section('content')
   
    <h1>グループ作成</h1>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
    
            {!! Form::open(['route' => 'groups.store']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'グループ名') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('comment', 'コメント') !!}
                    {!! Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('作成', ['class' => 'btn btn-primary btn-block']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
