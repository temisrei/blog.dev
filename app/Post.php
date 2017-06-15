<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ["deleted_at"];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function users() {
        return $this->belongsTo('App\User');
    }

    public function photos() {
        return $this->morphMany('App\Photo', 'imageable');
    }

}
