<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';
    protected $fillable = [
        'latitude','longitude','country_id'
    ];


    public function country()
    {
        return $this->belongsTo('App\Models\Country', 'country_id');
    }

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
