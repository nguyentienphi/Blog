<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;

class CommentManagementController extends Controller
{
   public function index()
    {
        $comment = Comment::paginate(config('blog.paginate_comment'));
        return view('admin.comments.index_comment', compact('comment'));
    }

    public function destroy($id)
    {
        try
        {
            Comment::findOrFail($id)->delete();

            return back()->with(trans('message.success'), trans('message.successfull'));
        } catch (Exception $e) {
            return back()->with(trans('message.fail', trans('message.action_fail')));
        }
    }
}
