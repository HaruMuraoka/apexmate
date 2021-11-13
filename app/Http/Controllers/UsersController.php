<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function edit($id)
    {
        $data = [];
        if (\Auth::check())
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);
        $apex_id = $user->apex_id;
        $email = $user->email;
        $password = $user->password;
        
        $data = [
                'user' => $user,
                'apex_id' => $apex_id,
                'email' => $email,
                'password' => $password,
                
            ];
        
        // ユーザ詳細ビューでそれを表示
        return view('users.edit', $data);
    }
    
    public function update(Request $request)
    {      
        $user = \Auth::user();
        $user->id = $request->user()->id;
        $user->apex_id = $request->apex_id;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        
        

        $user->update();

        return redirect ('/');
        
        

        
    }
}
