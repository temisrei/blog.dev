<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'fulltext']; //白名單
    // protected $guarded = ['is_admin'];          //黑名單
}
