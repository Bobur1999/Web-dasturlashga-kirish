<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\feedback;

class FeedbackController extends Controller
{
    Public function index()
    {
        $items = feedback::latest()->get();

        return view('admin.feedbacks.index', compact('items'));
    }

    public function show($id)
    {
        $item = feedback::findOrFail($id);
        $item->update([
            'status' => feedback::STATUS_READED
        ]);

        return view('admin.feedbacks.show', compact('item'));
    }

    public function delete($id)
    {
        $item = feedback::findOrFail($id);
        $item->delete();

        return redirect()->route('admin.feedbacks.index')->with('delete', 'Xabar o`chirldi!');
    }
}
