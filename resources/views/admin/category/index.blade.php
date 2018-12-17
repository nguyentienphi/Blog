@extends('layouts.admin_default')
@section('title', trans('message.category'))
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">@lang('message.category')
                <a href="{{ route('admincategory.create') }}" class="btn btn-primary">
                    <i class="fa fa-paint-brush"></i>@lang('message.createCategory')</a>
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
                        <th class="col-name-category"> @lang('message.name')</th>
                        <th>@lang('message.action')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $categories)
                        <tr>
                            <td> {{ $categories->name }} </td>
                            <td>
                                <div class="col-md-3">
                                    <a href="{{ route('admincategory.edit', $categories) }}" class="btn btn-success"> @lang('message.edit') <i class="fa fa-edit"></i></a>
                                </div>
                                <div class="col-md-3">
                                    {{Form::open(['method' => 'delete', 'route' => ['admincategory.destroy', $categories->id]])}}
                                        {{Form::submit(trans('message.delete'), ['class' => 'btn btn-danger delete'])}}
                                    {{Form::close()}}
                                </div>
                            </td>
                        </tr>
                    @endforeach()
                </tbody>
                <tfoot>
                    <tr>
                        <th>{{ $category->links() }}</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection()
