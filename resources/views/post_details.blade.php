@extends('layouts.default')
@section('title', $post->title)
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">
                 {{ Html::image(asset('storage/image/post/'.$post->image), '', ['class' => 'image-post-detail']) }}
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-9">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->body }}</p>
                <hr>
                <div id="show">
                    @foreach($post->comments as $comment)
                        <p><strong>{{$comment->user->name}} :</strong> {{ $comment->content }} </p>
                    @endforeach()
                </div>
                <hr>
                @guest
                @else
                    <div>
                        {{ Form::textarea('comment','', ['class' => 'form-control', 'rows' => config('blog.rows'), 'id' => 'postContent']) }}
                        {{ Form::hidden('post_id', $post->id, ['id' => 'post_id']) }}
                        <br>
                        {{ Form::submit('comment', ['class' => 'btn btn-success', 'id' => 'btnComment']) }}
                    </div>
                @endguest
            </div>
        </div>
    </div>
@endsection()
