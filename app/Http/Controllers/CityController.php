<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;
use App\Models\State;
use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        // csrf_token();

       return  $cities;
    }

    public function storeOneToMany()
    {
        $country = Country::first();
        $state= $country->states()->first();

        $dataCities=[
            0=>['name'=>'Monteria'],
            1=>['name'=>'Sahagun'],
            3=>['name'=>'Chinu'],
            4=>['name'=>'Lorica']
        ];

        $city=$state->cities()->createMany($dataCities);
       

       return $city;
    }
}
