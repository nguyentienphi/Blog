@extends('layouts.admin_default')
@section('title', trans('message.user'))
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">@lang('message.user')
            </h3>
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
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="col-title-post"> @lang('message.name') </th>
                        <th class="col-name"> @lang('message.title')</th>
                        <th class="col-image"> @lang('message.content') </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comment as $comments)
                        <tr>
                            <td>{{ $comments->user->name }}</td>
                            <td>{{ $comments->post->title }}</td>
                            <td>{{ $comments->content }}</td>
                            <td>
                                <div class="col-md-5">
                                    {{Form::open(['method' => 'delete', 'route' => ['admincomment-mangement.destroy', $comments->id]])}}
                                        {{Form::submit(trans('message.delete'), ['class' => 'btn btn-danger delete'])}}
                                    {{Form::close()}}
                                </div>
                            </td>
                        </tr>
                    @endforeach()
                </tbody>
                <tfoot>
                    <tr>
                        <th>{{ $comment->links() }}</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection()
