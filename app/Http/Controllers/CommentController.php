<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Auth;

class CommentController extends Controller
{

    public function storeComment(Request $request)
    {
        $name = Auth::user()->name;
        $comment =  Comment::create([
            'user_id' => Auth::user()->id,
            'post_id' => $request->postID,
            'content' => $request->postContent
        ]);
        return response()->json([
            'content' => $request->postContent,
            'name' => $name
        ]);
    }
}
