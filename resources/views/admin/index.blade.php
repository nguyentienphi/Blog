@extends('layouts.admin_default')
@section('title', 'trang chu')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">@lang('message.information_admin')</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-wrench"></i></button>
                        </div>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                             @if( Auth::user()->avatar != null )
                                {{ Html::image(asset('storage/image/avatar/'.Auth::user()->avatar), '', ['class' => 'img-circle img-admin']) }}
                            @else
                                {{ Html::image(asset('storage/image/abstract-user-flat-3.svg'), '', ['class' => 'img-circle img-admin']) }}
                            @endif
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-4">
                            <div>
                                <p class="text-center">
                                    <strong>@lang('message.information_admin')</strong>
                                </p>
                                <div class="progress-group">
                                    <p><strong>@lang('message.name')</strong> : </p>
                                    <p><strong>@lang('message.email')</strong> : </p>
                                    <p><strong>@lang('message.phone')</strong></p>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <p class="text-center">
                                    <strong>@lang('message.skill')</strong>
                                </p>
                                <div class="progress-group">
                                    <span class="progress-text">@lang('message.php')</span>
                                    <div class="progress sm">
                                        <div class="progress-bar progress-bar-aqua php"></div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <span class="progress-text">@lang('message.mysql')</span>
                                    <div class="progress sm">
                                        <div class="progress-bar progress-bar-red mysql"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection()
