<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Group;


class GroupsController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) { // 認証済みの場合
            // ユーザの作成グループを作成日時の降順で取得）
            $groups = Group::orderBy('id', 'desc')->paginate(10);

            $data = [
                
                'groups' => $groups,
            ];
        }

        // Welcomeビューでそれらを表示
        return view('welcome', $data);
    }
    
    public function create()
    {
           $group = new Group;

       
        return view('groups.create', [
            'group' => $group,
        ]); 
    }
    
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'name' => 'required|max:255',
            'comment' => 'required|max:1000',
        ]);

        
        Group::create([
            'name' => $request->name,
            'comment' => $request->comment,
        ]);

        // 前のURLへリダイレクトさせる
        return redirect('/');
    }
    
    public function show($id)
    {
        
        $group = Group::findOrFail($id);
        
        $name = $group->name;

        return view('groups.show', [
            'name' => $name,
        ]);
    }
}
