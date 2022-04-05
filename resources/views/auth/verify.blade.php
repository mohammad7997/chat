{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layout')
@section('content')

<div class="col-md-12 col-xl-7 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
    <div class="container col-10">
        <div class="row text-center" id="row_email">
            <div class="w-100" id="emial_confirmation_header">{{ __('Verify Your Email Address') }}</div>
            <div class="card-body">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                <p id="emial_confirmation_content">
                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                </p>
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <input class="btn btn-primary btn-lg " type="submit" value={{ __('click here to request another') }}>
                    {{-- <button type="submit" class="btn btn-danger p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>. --}}
                </form>
            </div>
        </div>
    </div>

</div>
</div>

@endsection
