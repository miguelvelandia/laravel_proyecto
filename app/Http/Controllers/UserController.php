<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserRequest2;


class UserController extends Controller
{
    
    public function index()
    {
        $user=User::all();
        //return $user;
         return csrf_token();
    }

    public function guardar(UserRequest2 $request){
      $data=$request->all();
      return $data;
    }
    public function store(UserRequest $request)
    {        
            $data=$request->all();
            //$user=User::create($data);           
            return   $data;
        
    }
     
    public function update(Request $request, $id)
    {
        
        $validator=$request->validate([
            'name'=>'required|min:3|max:20',
            'email'=>'required|email:rfc',
            'password'=>'required|confirmed:password|alpha_num',
            'password_confirmation'=>'required'
        ]);
        

        return  $validator;
    }

    public function destroy($id)
    {
        //
    }
}
