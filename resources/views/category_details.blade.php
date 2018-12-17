@extends('layouts.default')
@section('title', trans('message.logo'))
@section('content')
    <div>
        <div class="section">
            <div class="container">
                <div class="row">
                    @foreach($post as $posts)
                        <div class="col-md-4">
                            <div class="post">
                                <a class="post-img box-emage" href="{{ route('post-details', $posts) }}">\
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
    </div>
@endsection()
