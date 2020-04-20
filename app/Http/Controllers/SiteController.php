<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

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
    // Teskari Aloqa
    public function feedbackStore(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|max:100',
            'email'=>'required|email',
            'subject'=>'required|min:10|max:128',
            'message'=>'required|max:2048'
        ]);

        feedback::create([
            'name'=>$request->post('name'),
            'email'=>$request->post('email'),
            'subject'=>$request->post('subject'),
            'message'=>$request->post('message')
        ]);

        return redirect()
                ->route('aloqa')
                ->with('success', 'Xabar uchun rahmat! Tez orada sizga javob qaytaramiz.');
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
