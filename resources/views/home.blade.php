@extends('layouts.default')
@section('title', trans('message.logo'))
@section('content')
    <div>
        <div class="section">
            <div class="container">
                <div id="hot-post" class="row hot-post">
                    <div class="col-md-12 ">
                        <div class="post post-thumb">
                            <a class="post-img" href=""><img src="" alt="" "></a>
                            <div class="post-body">
                                <h3 class="post-title title-lg"><a href=""></a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="post">
                            <a class="post-img" href=""><img src="" alt=""></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href=""></a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
