@extends('layouts.default')
@section('title', trans('message.logo'))
@section('content')
    <div>
        <div class="row">
            <div class="col-md-12">
                @if(session()->has(trans('message.category_notmatch')))
                    <p class="alert alert-danger">
                        {{ session(trans('message.category_notmatch')) }}
                    </p>
                @endif()
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div id="hot-post" class="row hot-post">
                    <div class="col-md-12 ">
                        <div class="post post-thumb">
                            <a class="post-img image-title" href="{{ route('post-details', $postMax) }}">
                             {{ Html::image(asset('storage/image/post/'.$postMax->image), '') }}
                            </a>
                            <div class="post-body">
                                <h3 class="post-title title-lg"><a href="{{ route('post-details', $postMax) }}">{{ $postMax->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    @foreach($post as $posts)
                        <div class="col-md-4">
                            <div class="post">
                                <a class="post-img box-emage" href="{{ route('post-details', $posts) }}">
                                    <img src="../storage/image/post/{{ $posts->image }}">
                                     {{ Html::image(asset('storage/image/post/'.$posts->image), '') }}
                                </a>
                                <div class="post-body">
                                    <h3 class="post-title"><a href="{{ route('post-details', $posts) }}"> {{ $posts->title }} </a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach()
                </div>
            </div>
        </div>
        <div>
            {{ $post->links() }}
        </div>
    </div>
@endsection()
