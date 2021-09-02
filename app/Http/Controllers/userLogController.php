<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class userLogController extends Controller
{
    //
    public function index(){

        $ur = $_POST['user'];
        $pass = $_POST['key'];

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'accept' => '*/*'
        ])->post('http://localhost:9379/Users/authenticate', [
            'username' => $ur,
            'password' => $pass
        ]);

        $msg = '';

        if($response->serverError()){
        $msg = 'serever error';
    }

    if($response->successful()){

        session_start();
        $_SESSION["usuario"]=$ur;

        //$msg = $response->json();
        //$cuerpo = $response->getBody();
        //return view('home', ['usuario' => json_decode($cuerpo)]);
        return view('index');

        
    }else{

        return view('error');
    }

    if($response->failed()){
        $msg = 'failed 400';
    }
    
       //return $msg;
        //return 'hola mundo' . $_POST["user"];
        //return view("home", ["posts" => json_decode($posts)]);
        //return json_decode($posts);
    }

}
