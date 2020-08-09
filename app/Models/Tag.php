<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = [
        'name'
    ];

    public function posts()
    {
        return $this->morphedByMany('App\Models\Blog', 'taggable');
    }

    public function videos()
    {
        return $this->morphedByMany('App\Models\Video', 'taggable');
    }
}
