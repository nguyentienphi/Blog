<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('checkMembers');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postMax = Post::sortPost()->first();
        $post = Post::paginate(config('blog.paginate'));
        return view('home', compact('post', 'postMax'));
    }

    public function showPost(Post $post)
    {
        return view('post_details',compact('post'));
    }

    public function showCategory($id)
    {
        try
        {
            $post = Category::findOrfail($id)->posts()->get();
            return view('category_details',compact('post'));
        } catch (Exception $e) {
            return back()->with(trans('message.category_notmatch'), trans('message.error_category'));
        }
    }
}
