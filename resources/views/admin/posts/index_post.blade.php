@extends('layouts.admin_default')
@section('title', trans('message.post'))
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">@lang('message.post')
                <a href="{{ route('adminpost.create') }}" class="btn btn-primary">
                    <i class="fa fa-paint-brush"></i>@lang('message.createPost')</a>
            </h3>
        </div>
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="col-title-post"> @lang('message.title') </th>
                        <th class="col-name"> @lang('message.category')</th>
                        <th id="col-image"> @lang('message.image') </th>
                        <th> @lang('message.action') </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($post as $posts)
                        <tr>
                            <td> {{ $posts->title }} </td>
                            <td>{{ $posts->category->name }}</td>
                            <td>
                                {{ Html::image(asset('storage/image/post/'.$posts->image), '', ['class' => 'img-thumbnail img-post']) }}
                            </td>
                            <td>
                                <div class="col-md-5">
                                    <a href="{{ route('adminpost.edit', $posts) }}" class="btn btn-success"> @lang('message.edit') <i class="fa fa-edit"></i></a>
                                </div>
                                <div class="col-md-5">
                                    {{Form::open(['method' => 'delete', 'route' => ['adminpost.destroy', $posts->id]])}}
                                        {{Form::submit(trans('message.delete'), ['class' => 'btn btn-danger delete'])}}
                                    {{Form::close()}}
                                </div>
                            </td>
                        </tr>
                    @endforeach()
                </tbody>
                <tfoot>
                    <tr>
                        <th>{{ $post->links() }}</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection()
