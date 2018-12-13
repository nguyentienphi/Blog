@extends('layouts.default')
@section('title', @trans('message.logo'))
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">
                <img src="" >
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-9">
                <h2></h2>
                <p></p>
                <hr>
                <div>
                </div>
                <hr>
                <div >
                    {{ Form::open() }}
                        {{ Form::textarea('comment','', ['class' => 'form-control', 'rows' => config('blog.rows')]) }}
                        <br>
                        {{ Form::submit('comment', ['class' => 'btn btn-success']) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection()
