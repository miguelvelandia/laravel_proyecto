<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class DetalleBlog extends Model
{
    
    protected $table = 'detalle_blogs';
    protected $fillable = [
         'content', 'blog_id',
    ];


    public function blog()
    {
        return $this->belongsTo('App\models\Blog', 'blog_id');
    }

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
