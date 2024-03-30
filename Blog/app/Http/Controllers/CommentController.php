<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'comment' => 'required|string|max:255',
        ]);
        $comment = new Comment();
        $comment->user_id=auth()->user()->id;
        $comment->blog_id=$request->blog;
        $comment->comment=$request->comment;
        $comment->save();
        return redirect()->back()->with('success','Comment added successfully!');
    }
    public function destroy(string $id)
    {
        $comment=Comment::find($id);
        if ($comment->user_id=auth()->user()->id){
            $comment->delete();
        }
        return redirect()->back()->with('success','Comment deleted successfully!');
    }
}
