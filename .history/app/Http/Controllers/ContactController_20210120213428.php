<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Trails;
// use Illuminate\Support\Facades\Http;
use Response;

class ContactController extends Controller
{
 
    public function receiveMessage (Request $request) {

        $name= $request->name;
        $email= $request->email;
        $message= $request->message;
        $token= $request->token;
        



        return response()->json([
            'name' =>$name,
            'email' =>$email,
            'message' =>$message,
            'token' =>$token
        ], 200);
    }

    private function 
};