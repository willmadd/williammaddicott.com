<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Trails;
// use Illuminate\Support\Facades\Http;
use Response;
use Illuminate\Http\Request;

class ContactController extends Controller
{
 
    public function receiveMessage () {

        return response()->json([
            'user' =>"hello"
        ], 200);
    }
};