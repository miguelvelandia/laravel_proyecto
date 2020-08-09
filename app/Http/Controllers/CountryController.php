<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Location;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        // csrf_token();

       return  $countries;
    }

    public function getCities(){
      
        $countries = Country::with('cities')->get();
        return  $countries;
    }

    public function getStates(){
      
        $countries = Country::with('states')->get();
        return  $countries;
    }



    public function storeOneToOne()
    {
        $country = Country::create(['name'=>'Colombia']);
        $locationData=[
            'latitude'=>'2450',
            'longitude'=>'2567'
        ];
        $location=$country->location()->create($locationData);

       return $location;
    }
}
