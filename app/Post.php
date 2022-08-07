<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use APP\User;

class Post extends Model
{

    protected $fillable = ['title','content','category_id','user_id'];

    public function user()
    {
        return $this ->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function tagsToString()
    {
        $string = [];
        foreach ($this->tags as $key => $tag) {
            $string[]= $tag->name;
        }
        return implode(',',$string);
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}
