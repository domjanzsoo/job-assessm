<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIUserContollerr extends Controller
{
    public function index(){

           header('Access-Control-Allow-Origin:  *');
           header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Authorization, Origin');
           header('Access-Control-Allow-Methods:  POST, PUT');
           return response()->json(['testkey'=>'test-value']);
   }

    public function listusers(){
         $users=App\User::all();
            
         
         
            header('Access-Control-Allow-Origin:  *');
           // header('Access-Control-Allow-Origin:  http://localhost:4200');
            header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Authorization, Origin');
            header('Access-Control-Allow-Methods: GET, POST, PUT');
            return response()->json(['testkey'=>'test-value']);
    }
}
