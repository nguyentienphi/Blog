@extends('layouts.default')
@section('title', trans('message.logo'))
@section('content')
    <div class="form-edit-profile">
        @if(session()->has(trans('message.success')))
            <div class="alert alert-success">
                {{session(trans('message.success'))}}
            </div>
        @elseif(session()->has(trans('message.fail')))
            <div class="alert alert-success">
                {{session(trans('message.fail'))}}
            </div>
        @endif
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                {{ Form::open(['method' => 'PATCH', 'route' => ['edit_profile.update', $user->id], 'enctype' => 'multipart/form-data']) }}
                    <div class="form-group">
                        {{ Html::image(asset('storage/image/avatar/'.$user->avatar), '', ['class' => 'image-profile img-circle']) }}
                        {{ Form::hidden('oldProfile', $user->avatar) }}
                    </div>
                    <div class="form-group">
                        {{ Form::file('avatar', ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label(trans('message.email')) }}
                        {{ Form::text('email', $user->email, ['class' => 'form-control', 'required']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label(trans('message.name')) }}
                        {{ Form::text('name', $user->name, ['class' => 'form-control', 'required']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::submit(trans('message.update'), ['class' => 'btn btn-primary']) }}
                    </div>
                {{Form::close()}}
                <div>
                    <span class="error-profile"> @include('commonts.errors')</span>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection()
