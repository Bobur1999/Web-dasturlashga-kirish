<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\dunyo;
use Illuminate\Support\Facades\Storage;

class DunyoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dunyo=dunyo::all();

        return view('admin/dunyo/index', compact('dunyo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dunyo.create');
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

        dunyo::create([
            'title' => $request->post('title'),
            'short' => $request->post('short'),
            'content' => $request->post('content'),
            'img' => $request->file('img')->store('dunyo', ['disk' => 'public']),
        ]);

        return redirect()->route('admin.dunyo.index')->with('success', 'Item created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dunyo = dunyo::findOrFail($id);

        return view('admin.dunyo.show', compact('dunyo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dunyo = dunyo::findOrFail($id);

        return view('admin.dunyo.edit', compact('dunyo'));
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
        $dunyo = dunyo::findOrFail($id);

      $request -> validate([
        'title'=> 'required',
        'short'=> 'required',
        'content'=> 'required|min:5'
      ]);

      $dunyo->update([
        'title'=>$request->post('title'),
        'short'=>$request->post('short'),
        'content'=>$request->post('content'),
    
    ]);

    return redirect()->route('admin.dunyo.index')->with('success','Item update!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = dunyo::findOrFail($id);
        
        $delete -> delete();

        return redirect()->route('admin.dunyo.index')->with('delete', 'Item delete!');

    }
}
