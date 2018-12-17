@extends('layouts.admin_default')
@section('title', trans('message.edit'))
@section('content')
<div class="box box-warning create-box" >
    <div class="box-header with-border">
        <h3 class="box-title">@lang('message.edit')</h3>
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="box-body">
        {{ Form::open(['route' => ['adminpost.update', $post], 'enctype' => 'multipart/form-data', 'method' => 'PATCH']) }}
            <div class="form-group">
                {{ Form::label(trans('message.category')) }}
                {{ Form::text('category', $post->category->name, ['class' => 'form-control', 'disabled']) }}
            </div>
            <div class="form-group">
                {{ Form::label(trans('message.title')) }}
                {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => trans('message.enter'), 'required']) }}
            </div>
            <div class="form-group">
                {{ Html::image(asset('storage/image/post/'.$post->image), '', ['class' => 'img-post-edit']) }}
            </div>
            <div class="form-group">
                {{ Form::label(trans('message.image')) }}
                {{ Form::file('image', ['class' => 'form-control']) }}
                {{ Form::hidden('oldImg', $post->image) }}
            </div>
            <div class="form-group">
                {{ Form::label(trans('message.body')) }}
                {{ Form::textarea('body', $post->body, ['class' => 'form-control', 'rows' => config('blog.rows'), 'placeholder' => trans('message.enter'), 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::submit(trans('message.update'), ['class' => 'btn btn-primary']) }}
            </div>
        {{ Form::close() }}
        <div class="error-post">
            @include('commonts.errors')
        </div>
    </div>
</div>
@endsection()
