<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    protected $fillable = [
        'name',
    ];

    
    public function setNameAttribute($value){

        $this->attributes['name']=strtoupper($value);
     }

    public function location()
    {
        return $this->hasone('App\Models\Location');
    }

    public function states()
    {
        return $this->hasMany('App\Models\State');
    }

    public function cities()
    {
     // $this->hasManyThrough('App\Models\City', 'App\Models\State');
        return $this->hasManyThrough('App\Models\City', 'App\Models\State','country_id','state_id','id','id');
    }

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    protected $hidden = [
        'created_at', 'updated_at',
    ];


}
