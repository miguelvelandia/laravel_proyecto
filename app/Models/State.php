<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';
    protected $fillable = [
        'name','initials','country_id'
    ];

    public function country()
    {
        return $this->belongsTo('App\Models\Country', 'country_id');
    }

    public function cities()
    {
        return $this->hasMany('App\Models\City');
    }
    protected $hidden = [
        'created_at', 'updated_at',
    ];

}
