<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\feedback;
use App\dunyo;
use App\sport;
use App\mahalla;
use App\texnologiya;

class SiteController extends Controller
{
    public function home()
    {
        return view('home');
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
    // Yangiliklar
    public function mahalliy()
    {
        $mahalla = mahalla::all();

        return view('mahalliy', compact('mahalla'));
    }
    public function dunyo()
    {
        $dunyo = dunyo::all();

        return view('dunyo', compact('dunyo'));
    }
    public function texnologiya()
    {
        $texnologiya = texnologiya::all();

        return view('texnologiya', compact('texnologiya'));
    }
    public function sport()
    {
        $sport = sport::all();

        return view('sport', compact('sport'));
    }
    //Mahalliy batafsil qismi
    public function batafsil1($id)
    {
        $item = mahalla::findOrFail($id);

        $item -> increment('views');
        
        return view('batafsil', compact('item'));
    }
    
    public function batafsil2($id)
    {
        $item = dunyo::findOrFail($id);

        $item -> increment('views');
        
        return view('batafsil', compact('item'));
    }
    
    public function batafsil3($id)
    {
        $item = texnologiya::findOrFail($id);

        $item -> increment('views');
        
        return view('batafsil', compact('item'));
    }
    
    public function batafsil4($id)
    {
        $item = sport::findOrFail($id);

        $item -> increment('views');
        
        return view('batafsil', compact('item'));
    }

    public function search(Request $request)
    {
        $key = $request->get('key');
        $key = '%'.trim($key).'%';

        $a = mahalla::where('title', 'LIKE', $key)
                    ->orWhere('short', 'LIKE', $key)
                    ->orWhere('content', 'LIKE', $key);

        $b = dunyo::where('title', 'LIKE', $key)
                    ->orWhere('short', 'LIKE', $key)
                    ->orWhere('content', 'LIKE', $key)
                    ->union($a);
                   
        $c = sport::where('title', 'LIKE', $key)
                    ->orWhere('short', 'LIKE', $key)
                    ->orWhere('content', 'LIKE', $key)
                    ->union($b);
                    
        $d = texnologiya::where('title', 'LIKE', $key)
                    ->orWhere('short', 'LIKE', $key)
                    ->orWhere('content', 'LIKE', $key)
                    ->union($c)
                    ->get();

        $results = $d;


        return view('search', compact('results'));
    }

}
