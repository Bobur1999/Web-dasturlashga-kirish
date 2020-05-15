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
        $mahalla = mahalla::orderBy('id', 'DESC')->limit(1)->get();
        $dunyo = dunyo::orderBy('id', 'DESC')->limit(1)->get();
        $texnologiya = texnologiya::orderBy('id', 'DESC')->limit(1)->get();
        $sport = sport::orderBy('id', 'DESC')->limit(1)->get();


        $a = mahalla::orderBy('id', 'DESC')->limit(4)->get();
        $b = dunyo::orderBy('id', 'DESC')->limit(4)->get();          
        $c = texnologiya::orderBy('id', 'DESC')->limit(4)->get();
        $d = sport::orderBy('id', 'DESC')->limit(4)->get();

        return view('home',[
            
            'mahalla'=>$mahalla,
            'dunyo'=>$dunyo,
            'texnologiya'=>$texnologiya,
            'sport'=>$sport,
            'a'=>$a,
            'b'=>$b,
            'c'=>$c,
            'd'=>$d
            
        ]);
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
        $mahalla = mahalla::orderBy('id', 'DESC')->limit(1)->get();
        $dunyo = dunyo::orderBy('id', 'DESC')->limit(1)->get();
        $texnologiya = texnologiya::orderBy('id', 'DESC')->limit(1)->get();
        $sport = sport::orderBy('id', 'DESC')->limit(1)->get();

        $news = mahalla::orderBy('id', 'DESC')->get();

        $views = mahalla::orderBy('views', 'DESC')->limit(4)->get();     

        return view('mahalliy',[
            
            'mahalla'=>$mahalla,
            'dunyo'=>$dunyo,
            'texnologiya'=>$texnologiya,
            'sport'=>$sport,
            'news'=>$news,
            'views'=>$views
        ]);
    }
    public function dunyo()
    {
        $mahalla = mahalla::orderBy('id', 'DESC')->limit(1)->get();
        $dunyo = dunyo::orderBy('id', 'DESC')->limit(1)->get();
        $texnologiya = texnologiya::orderBy('id', 'DESC')->limit(1)->get();
        $sport = sport::orderBy('id', 'DESC')->limit(1)->get();

        $news =dunyo::orderBy('id', 'DESC')->get();

        $views = dunyo::orderBy('views', 'DESC')->limit(4)->get();     

        return view('dunyo',[
            
            'mahalla'=>$mahalla,
            'dunyo'=>$dunyo,
            'texnologiya'=>$texnologiya,
            'sport'=>$sport,
            'news'=>$news,
            'views'=>$views
        ]);
    }
    public function texnologiya()
    {
        $mahalla = mahalla::orderBy('id', 'DESC')->limit(1)->get();
        $dunyo = dunyo::orderBy('id', 'DESC')->limit(1)->get();
        $texnologiya = texnologiya::orderBy('id', 'DESC')->limit(1)->get();
        $sport = sport::orderBy('id', 'DESC')->limit(1)->get();

        $news = texnologiya::orderBy('id', 'DESC')->get();

        $views = texnologiya::orderBy('views', 'DESC')->limit(4)->get();     

        return view('texnologiya',[
            
            'mahalla'=>$mahalla,
            'dunyo'=>$dunyo,
            'texnologiya'=>$texnologiya,
            'sport'=>$sport,
            'news'=>$news,
            'views'=>$views
        ]);
    }
    public function sport()
    {
        $mahalla = mahalla::orderBy('id', 'DESC')->limit(1)->get();
        $dunyo = dunyo::orderBy('id', 'DESC')->limit(1)->get();
        $texnologiya = texnologiya::orderBy('id', 'DESC')->limit(1)->get();
        $sport = sport::orderBy('id', 'DESC')->limit(1)->get();

        $news = sport::orderBy('id', 'DESC')->get();

        $views = sport::orderBy('views', 'DESC')->limit(4)->get();     

        return view('sport',[
            
            'mahalla'=>$mahalla,
            'dunyo'=>$dunyo,
            'texnologiya'=>$texnologiya,
            'sport'=>$sport,
            'news'=>$news,
            'views'=>$views
        ]);
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
    //search qismi
    public function search1(Request $request)
    {
        $key = $request->get('key');
        $key = '%'.trim($key).'%';

        $mahalla = mahalla::where('title', 'LIKE', $key)
                    ->orWhere('short', 'LIKE', $key)
                    ->orWhere('content', 'LIKE', $key)
                    ->get();

        $results = $mahalla;

        return view('search', compact('results'));
    }

    public function search2(Request $request)
    {
        $key = $request->get('key');
        $key = '%'.trim($key).'%';

        $dunyo = dunyo::where('title', 'LIKE', $key)
                    ->orWhere('short', 'LIKE', $key)
                    ->orWhere('content', 'LIKE', $key)
                    ->get();

        $results = $dunyo;

        return view('search2', compact('results'));
    }

    public function search3(Request $request)
    {
        $key = $request->get('key');
        $key = '%'.trim($key).'%';

        $texnologiya = texnologiya::where('title', 'LIKE', $key)
                    ->orWhere('short', 'LIKE', $key)
                    ->orWhere('content', 'LIKE', $key)
                    ->get();

        $results = $texnologiya;

        return view('search3', compact('results'));
    }

    public function search4(Request $request)
    {
        $key = $request->get('key');
        $key = '%'.trim($key).'%';

        $sport = sport::where('title', 'LIKE', $key)
                    ->orWhere('short', 'LIKE', $key)
                    ->orWhere('content', 'LIKE', $key)
                    ->get();

        $results = $sport;

        return view('search4', compact('results'));
    }

}
