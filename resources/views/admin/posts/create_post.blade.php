@extends('layouts.admin_default')
@section('title', trans('message.createPost'))
@section('content')
<div class="box box-warning create-box" >
    <div class="box-header with-border">
        <h3 class="box-title">@lang('message.create')</h3>
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif()
    <div class="box-body">
        {{ Form::open(['route' => 'adminpost.store', 'enctype' => 'multipart/form-data']) }}
            <div class="form-group">
                {{ Form::label(trans('message.category')) }}
                {{ Form::select('category_id', $category->pluck('name','id'), null, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label(trans('message.title')) }}
                {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => trans('message.enter'), 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label(trans('message.image')) }}
                {{ Form::file('image', ['class' => 'form-control', 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label(trans('message.body')) }}
                {{ Form::textarea('body', '', ['class' => 'form-control', 'rows' => config('blog.rows'), 'placeholder' => trans('message.enter'), 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::submit('create', ['class' => 'btn btn-primary']) }}
            </div>
        {{ Form::close() }}
        <div class="error-post">
            @include('commonts.errors')
        </div>
    </div>
</div>
@endsection()
