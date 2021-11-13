<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Chat;
use App\User;



class ChatsController extends Controller
{
    
    public function store(Request $request)
    {

        // バリデーション
        $request->validate([
            'content' => 'required|max:1000',
        ]);

        $chat = new Chat;
        $chat->content = $request->content;
        $chat->group_id =$request->group_id;
        $chat->user_id = $request->user_id;
        $chat->save();
    

        
        return back();
    }
}
