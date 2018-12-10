@extends('layouts.default')
@section('title', 'Nguyễn Tiến Phi')
@section('content')
<div>
    <div class="section">
        <div class="container">
            <div id="hot-post" class="row hot-post">
             
                <div class="col-md-12 ">
                    <div class="post post-thumb">
                        <a class="post-img" href=""><img src="./storage/image/post/{{$max->image}}" alt="" height="500px"></a>
                        <div class="post-body">
                            <h3 class="post-title title-lg"><a href="">{{$max->title}}</a></h3>
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
                        <a class="post-img" href=""><img src=" ../storage/image/post/{{ $posts->image }}" alt="" height="200px"></a>
                        <div class="post-body">
                            <h3 class="post-title"><a href="">{{ $posts->title }}</a></h3>
                        </div>
                    </div>
                </div>
                @endforeach()
            </div>
        </div>
    </div>
    <div class="mid">
        {{$post->links()}}
    </div>
</div>
@endsection()