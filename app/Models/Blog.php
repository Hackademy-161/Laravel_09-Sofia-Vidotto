<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'body', 'img', 'cat_1', 'cat_2', 'cat_3', 'cat_4','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
