@extends('layouts.app')

@section('content')
    <div class=text-left>
        <h1>ユーザ設定</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            <form method="post" action="{{ route ('users.update', $user->id) }}">
                @csrf
                @method('patch')
                
                <div class="form-group"> 
                    <label for="exampleInputEmail1">APEX ID</label>
                    <input type="text" name="apex_id" value="{{ $apex_id }}" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Eメール</label>
                    <input type="email" name="email" value="{{ $email }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">パスワード</label>
                    <input type="password" name="password" class="form-control">
                </div>
                    
                <div class="form-group">
                     <button type="submit" class="form-control btn btn-danger">更新</button>
                </div>
            </form>
        </div>
    </div>
@endsection