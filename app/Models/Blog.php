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




}
