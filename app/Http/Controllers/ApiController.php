<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App;

class ApiController extends Controller
{   
    //Constructor applying middleware for api key verification
    public function __construct()
    {
        $this->middleware('apicheck');
    }


    //Listing of all users  
    public function index(){
        $users=App\Models\User::all();

        return response($users, 200)
    ->header('Content-Type', 'application/json');
        
    }

    //New user creation
    public function addNewUser(Request $request){

        $this->validate($request,[
            'firstName'     =>'required|string',
            'lastName'      =>'required|string',
            'DOB'           =>'required|date',
            'email'         =>'required|email|unique:users',
            'phoneNumber'   =>'required|digits:12'
        ]);
        
        $parameters=$request->all();
        App\Models\User::create($parameters);

        return response('User created successfully');
    }

    //Deleting user
    public function deleteuser($user_id){
        App\Models\User::destroy($user_id);

        return response(['Msg' =>'User deleted successfully'],200)->header('Content-Type', 'application/json');;
    }


    //updating an existing user
    public function updateUser(Request $request){
        $this->validate($request,[
            'firstName'     =>'string',
            'lastName'      =>'string',
            'DOB'           =>'date',
            'email'         =>'email|unique:users',
            'phoneNumber'   =>'digits:12'
        ]);
        $content=json_decode($request->getContent());
        $user=App\Models\User::find($content->id);

        $user->update((array) $content);
        return response('Update successful');
        
    }
}
