@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('message.verify')</div>
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            @lang('message.verification_link')
                        </div>
                    @endif
                    @lang('message.check')
                    @lang('message.send_mail_link_error'), <a href="{{ route('verification.resend') }}"> @lang('message.click_continue')</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
