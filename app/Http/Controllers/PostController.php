<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class PostController extends Controller
{
    //
    public function index(){

        $posts = HTTP::get('http://nielsdev.live/carreteras/carreterasgt/modelo/api.php?table=Carretera');

        //return $posts;
        return view("home", ["posts" => json_decode($posts)]);
        //return json_decode($posts);
    }
}
