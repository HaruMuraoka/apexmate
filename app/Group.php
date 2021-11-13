<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
     protected $fillable = [
         'name', 'comment'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function chats()
    {
        return $this->hasMany(Chat::class);
    }
}
