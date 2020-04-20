<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function mahalliy()
    {
        return view('mahalliy');
    }
    public function about()
    {
        return view('about');
    }
    public function aloqa()
    {
        return view('aloqa');
    }
    public function dunyo()
    {
        return view('dunyo');
    }
    public function texnologiya()
    {
        return view('texnologiya');
    }
    public function sport()
    {
        return view('sport');
    }
}
