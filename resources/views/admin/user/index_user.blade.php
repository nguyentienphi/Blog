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
                        <th class="col-name"> @lang('message.email')</th>
                        <th class="col-image"> @lang('message.image') </th>
                        <th> @lang('message.password') </th>
                        <th> @lang('message.action') </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $users)
                        <tr>
                            <td> {{ $users->name }} </td>
                            <td>{{ $users->email }}</td>
                            <td>
                                {{ Html::image(asset('storage/image/avatar/'.$users->avatar), '', ['class' => 'img-thumbnail']) }}
                            </td>
                            <td>{{ $users->password }}</td>
                            <td>
                                <div class="col-md-5">
                                    {{Form::open(['method' => 'delete', 'route' => ['adminuser.destroy', $users->id]])}}
                                        {{Form::submit(trans('message.delete'), ['class' => 'btn btn-danger delete'])}}
                                    {{Form::close()}}
                                </div>
                            </td>
                        </tr>
                    @endforeach()
                </tbody>
                <tfoot>
                    <tr>
                        <th>{{ $user->links() }}</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection()
