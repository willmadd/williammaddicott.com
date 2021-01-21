<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Trails;
// use Illuminate\Support\Facades\Http;
use Response;
// use App\Notifications\SendMessage;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMessage;

class ContactController extends Controller
{
 
    public function receiveMessage (Request $request) {

        $name= $request->name;
        $email= $request->email;
        $message= $request->message;
        $token= $request->token;
        
        $recaptcha = $this->reCaptcha($token);

// return $recaptcha['success'];

        if (!$recaptcha['success']){
            return response()->json([
                'message'=>'recaptcha failed'
            ], 401);
        }

        $message=[
            'name' =>$name,
            // 'email' =>$email,
            'email'=>'willmaddicott@gmail.com',
            'message'=>$message
        ];

        $xxx = $this->sendEmail($message);

        return response()->json([
            'name' =>$message,
            'xxx' =>$xxx,
        ], 200);
    }

    private function reCaptcha ($token) {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $data = [
                'secret' => '6LfKrjMaAAAAAGGEgAymaZ6X8qnoBo0huZtEILfV',
                'response' => $token,
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
                // return $$resultJson->score;
                if ($resultJson->success != true) {
                    return [
                        'message'=>'recaptcha Error',
                        'success'=> false
                ];
                }
                if ($resultJson->score >= 0.3) {
                //Validation was successful, add your form submission logic here
                return [
                    'message'=>'success',
                    'success'=> true
            ];
        } else {
                return [
                    'message'=>'recaptcha not valid',
                    'success'=> false
            ];
        }
    }
    private function sendEmail($data) 
    {
        
        // $mail = Mail::to($to_email)->send(new SendMessage)->with('data', $data);
        
        // viewData['data'] = $data;
        
        // $mail = (new SendMessage)->to($to_email)->subject('test message')->send();
        try{
            // $to_email = "willmaddicott@gmail.com";
            $data = array('name'=>"Virat Gandhi");
                Mail::send('email-template', $data, function($message) {
                    $message->to('willmaddicott@gmail.com', 'Tutorials Point')->subject
                        ('Laravel HTML Testing Mail');
                    $message->from('noreply@williammaddicott.com','Website');
                });

                    return ['message' => 'success', 
                'success' => true];
                    

                    // return "";
            }
            catch(Exception $e){
                // Get error here
                return ['message' => $e, 
                'success' => false];
            }
        }
};