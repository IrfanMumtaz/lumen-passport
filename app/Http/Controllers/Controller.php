<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\User;
class Controller extends BaseController
{
    //

    public function __construct(){
        $this->middleware('auth:api');
    }

    public function index(){
        $users = User::all();
        return \response()->json(['status' => 200, 'data' => $users]);
    }

    public function singleUser($id){
        $user = User::find($id);

        if(is_null($user)){
            return response()->json(['status' => 404, "message" => "No user found"]);
        }

        return response()->json(['status' => 200, "data" => $user]);
    }
}
