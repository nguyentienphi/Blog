<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::paginate(config('blog.post_paginate'));
        return view('admin.posts.index_post', compact('post'));
    }

    public function create()
    {
        $category = Category::all();
        return view('admin.posts.create_post', compact('category'));
    }

    public function store(PostRequest $request)
    {
        try
        {
            $post = $request->except('_token', 'image');
            $file = $request->image;
            $nameImg = time().'-'.$file->getClientOriginalName();
            $file->storeAs('public/image/post', $nameImg);
            $post['image'] = $nameImg;
            Post::create($post);

            return back()->with(trans('message.successfull'), trans('message.success'));
        } catch (Exception $e) {
            return back()->with(trans('message.fail', trans('message.action_fail')));
        }
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit_post', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        try
        {
            $input = $request->except('_token', '_method');
            $nameImg = $request->oldImg;
            if($request->has('image'))
            {
                $file = $request->image;
                $nameImg = time().'-'.$file->getClientOriginalName();
                $file->storeAs('public/image/post', $nameImg);
            }
            $input['image'] = $nameImg;
            $post = Post::findOrFail($post->id);
            $post->update($input);

            return back()->with(trans('message.successfull'), trans('message.success'));
        } catch (Exception $e) {
            return back()->with(trans('message.fail', trans('message.action_fail')));
        }
    }

    public function destroy($id)
    {
        try
        {
            Post::findOrFail($id)->delete();

            return back()->with(['success' => trans('message.success')]);
        } catch (Exception $e) {
            return back()->with(trans('message.fail', trans('message.action_fail')));
        }
    }
}
