@extends('layouts.admin_default')
@section('title', trans('message.createPost'))
@section('content')
<div class="box box-warning create-box" >
    <div class="box-header with-border">
        <h3 class="box-title">@lang('message.create')</h3>
    </div>
    @if(session()->has(trans('message.success')))
        <div class="alert alert-success">
            {{session(trans('message.success'))}}
        </div>
    @elseif(session()->has(trans('message.fail')))
        <div class="alert alert-success">
            {{session(trans('message.fail'))}}
        </div>
    @endif
    <div class="box-body">
        {{ Form::open(['route' => 'admincategory.store', 'enctype' => 'multipart/form-data']) }}
            <div class="form-group">
                {{ Form::label(trans('message.name')) }}
                {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => trans('message.enter'), 'required']) }}
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
