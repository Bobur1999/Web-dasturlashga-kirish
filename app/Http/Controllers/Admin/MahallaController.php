<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\mahalla;
use Illuminate\Support\Facades\Storage;
use Image;

class MahallaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahalla = mahalla::all();

        return view('admin/mahalla/index', compact('mahalla'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mahalla.create');
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
        $img_name=$request->file('img')->store('mahalla', ['disk' => 'public']);
        
        // Create thumbnail
        $full_path=storage_path('app/public/'.$img_name);
        $full_thumb_path=storage_path('app/public/thumbs/'.$img_name);
        $thumb=Image::make($full_path);
        
        // kvadrat
        $thumb->fit(350, 350, function($constraint){
            $constraint->aspectRatio();
        })->save($full_thumb_path);

        mahalla::create([
            'title' => $request->post('title'),
            'short' => $request->post('short'),
            'content' => $request->post('content'),
            'img' => $img_name,
            'thumb' => 'thumbs/'.$img_name,
        ]);

        return redirect()->route('admin.mahalla.index')->with('success', 'Item created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahalla = mahalla::findOrFail($id);

        return view('admin.mahalla.show', compact('mahalla'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahalla = mahalla::findOrFail($id);

        return view('admin.mahalla.edit', compact('mahalla'));
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
        $mahalla = mahalla::findOrFail($id);

      $request -> validate([
        'title'=> 'required',
        'short'=> 'required',
        'content'=> 'required|min:5'
      ]);

      $mahalla->update([
        'title'=>$request->post('title'),
        'short'=>$request->post('short'),
        'content'=>$request->post('content'),
    
    ]);

    return redirect()->route('admin.mahalla.index')->with('success','Item update!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = mahalla::findOrFail($id);
        
        $delete -> delete();

        return redirect()->route('admin.mahalla.index')->with('delete', 'Item delete!');

    }
}
