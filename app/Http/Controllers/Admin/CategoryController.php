<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::paginate(config('message.category_paginate'));

        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        try
        {
            Category::create($request->only('name'));

            return back()->with(trans('message.success'), trans('message.successfull'));
        } catch (Exception $e) {
            return back()->with(trans('message.fail', trans('message.action_fail')));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit_category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        try
        {
            Category::findOrFail($id)->update($request->only('name'));

            return back()->with(trans('message.success'), trans('message.successfull'));
        } catch (Exception $e) {
            return back()->with(trans('message.fail', trans('message.action_fail')));
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try
        {
            $post = json_decode(Post::where('category_id', $id)->get(['id']), true);
            Post::destroy($post);
            Category::findOrFail($id)->delete();

            return back()->with(trans('message.success'), trans('message.successfull'));
        } catch (Exception $e) {
            return back()->with(trans('message.fail', trans('message.action_fail')));
        }
    }
}
