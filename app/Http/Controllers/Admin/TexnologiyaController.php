<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\texnologiya;
use Illuminate\Support\Facades\Storage;
use Image;

class TexnologiyaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $texnologiya = texnologiya::latest()->get();

        return view('admin/texnologiya/index', compact('texnologiya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.texnologiya.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([

            'title'=> 'required',
            'short'=> 'required',
            'content'=> 'required',
            'img' => 'required|file|mimes:jpeg,jpg,png'
        ]);

        //Upload image to storage
        $img_name=$request->file('img')->store('texnologiya', ['disk' => 'public']);
        
        // Create thumbnail
        $full_path=storage_path('app/public/'.$img_name);
        $full_thumb_path=storage_path('app/public/thumbs/'.$img_name);
        $thumb=Image::make($full_path);
        
        // kvadrat
        $thumb->fit(350, 350, function($constraint){
            $constraint->aspectRatio();
        })->save($full_thumb_path);

        texnologiya::create([
            'title' => $request->post('title'),
            'short' => $request->post('short'),
            'content' => $request->post('content'),
            'img' => $img_name,
            'thumb' => 'thumbs/'.$img_name,
        ]);

        return redirect()->route('admin.texnologiya.index')->with('success', 'Item created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $texnologiya = texnologiya::findOrFail($id);

        return view('admin.texnologiya.show', compact('texnologiya'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $texnologiya = texnologiya::findOrFail($id);

        return view('admin.texnologiya.edit', compact('texnologiya'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $texnologiya = texnologiya::findOrFail($id);

        $request -> validate([
            'title'=> 'required',
            'short'=> 'required',
            'content'=> 'required|min:5'
        ]);

        if($request->file('img'))
        {
            //Delete Old File
            Storage::disk('public')->delete([
                $texnologiya->img,
                $texnologiya->thumb
            ]);

            $img_name = $request->file('img')->store('texnologiya', ['disk' => 'public']);
            $thumb_name = 'thumbs/'.$img_name;
            //Create thumbnail
            $full_path = storage_path('app/public/'.$img_name);
            $full_thumb_path = storage_path('app/public/'.$thumb_name);
            $thumb = Image::make($full_path);
            
            // kvadrat shaklida proporsiya bn qirqib olish
            $thumb->fit(350, 350, function($constraint){
                $constraint->aspectRatio();
            })->save($full_thumb_path);
        }
        else 
        {
            $img_name = $texnologiya->img;
            $thumb_name = $texnologiya->thumb;
        }

        $texnologiya->update([
            'title'=>$request->post('title'),
            'short'=>$request->post('short'),
            'content'=>$request->post('content'),
            'img' => $img_name,
            'thumb' =>$thumb_name,
        ]);

        return redirect()->route('admin.texnologiya.index')->with('success','Item update!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = texnologiya::findOrFail($id);
        
        $delete -> delete();

        return redirect()->route('admin.texnologiya.index')->with('delete', 'Item delete!');

    }
}
