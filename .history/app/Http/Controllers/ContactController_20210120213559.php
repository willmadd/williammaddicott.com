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

    private function reCaptcha () {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $data = [
                'secret' => '6LfKrjMaAAAAAGGEgAymaZ6X8qnoBo0huZtEILfV',
                'response' => $request->get('recaptcha'),
                'remoteip' => $remoteip
            ];
        $options = [
                'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
                ]
            ];
        $context = stream_context_create($options);
                $result = file_get_contents($url, false, $context);
                $resultJson = json_decode($result);
        if ($resultJson->success != true) {
                return back()->withErrors(['captcha' => 'ReCaptcha Error']);
                }
        if ($resultJson->score >= 0.3) {
                //Validation was successful, add your form submission logic here
                return back()->with('message', 'Thanks for your message!');
        } else {
                return back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }
    }
};