<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    
    protected $table = 'blogs';
    protected $fillable = [
        'title', 'content', 'user_id',
    ];


    public function user()
    {
        return $this->belongsTo('App\user', 'user_id');
    }

    public function detalle_blogs()
    {
        return $this->hasMany('App\Models\DetalleBlog');
    }

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    public function tags()
    {
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }

}
