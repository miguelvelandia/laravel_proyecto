<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
class StateController extends Controller
{
    public function index()
    {
        $states = State::with("cities")->get();
        //return csrf_token();

       return  $states;
    }

    public function store(Request $request){
     $data=$request->all();

     $state=State::create($data);
     return  $data;

    }

    public function storeOneToMany(Request $request)
    {
       // $data= $request->all();
        $state=State::find(2);

        $cities=$state->cities()->saveMany([
            new City(['name' => 'Corozal']),
            new City(['name' => 'Sampues']),
            new City(['name' => 'Coloso']),
        ]);
       

       return  $cities;
    }

    public function delete($id){
        $state=State::find($id);
        $state->delete();
        return  $state;

    }
}
