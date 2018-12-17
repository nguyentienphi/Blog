<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Comment;

class UserController extends Controller
{
    public function index()
    {
        $user = User::where('role_id', config('blog.role_id'))->paginate(config('blog.paginate_user'));
        return view('admin.user.index_user', compact('user'));
    }

    public function destroy($id)
    {
        try
        {
            $comment = json_decode(Comment::where('user_id', $id)->get(['id']), true);
            Comment::destroy($comment);
            User::findOrFail($id)->delete();

            return back()->with(trans('message.success'), trans('message.successfull'));
        } catch (Exception $e) {
            return back()->with(trans('message.fail', trans('message.action_fail')));
        }
    }
}
