<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs=Blog::all();
        return view('blogs.index',compact('blogs'));
    }
    public function listing()
    {
        $blogs=Blog::all();
        return view('blogs.listing',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('blogs.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the avatar file

        $attachment=time().'.png';
        Storage::disk('local')->put('/public/blog/'.$attachment, File::get($request->avatar));

        // Create a new post instance
        $blog = new Blog();
        $blog->user_id=auth()->user()->id;
        $blog->title = $validatedData['title'];
        $blog->content = $validatedData['content'];
        $blog->avatar = $attachment;
        $blog->save();
        return redirect()->route('blogs.index')->with('success','Blog posted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $edit=Blog::find($id);
        return view('blogs.edit',compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the avatar file




        // Create a new post instance
        $blog = Blog::find($id);
        $blog->user_id=auth()->user()->id;
        $blog->title = $validatedData['title'];
        $blog->content = $validatedData['content'];
        if ($request->avatar){
            $attachment=time().'.png';
            Storage::disk('local')->put('/public/blog/'.$attachment, File::get($request->avatar));
            $blog->avatar = $attachment;
        }
        $blog->save();
        return redirect()->to('blogs')->with('success','Blog updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::find($id)->delete();
        return redirect()->back()->with('success','Blog deleted successfully!');


    }
}
