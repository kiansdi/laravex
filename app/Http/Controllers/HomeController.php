<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        dd(auth()->user());
        return view('home');
    }



    public function pdf()
    {
        $vid = "video";
        header( 'Cache-Control: public' );
        header( 'Content-Description: File Transfer' );
        header( 'Content-Type: video/mp4' );
        header( 'Content-Transfer-Encoding: binary' );
        readfile("../xoop/$vid.mp4");
        exit;
    }
}
