@extends('layout')
@section('content')

<div class="col-md-12 col-xl-7 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
    <div class="row">
        <div class="container col-6 login">
            <form id="login" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row">

                  <div class="col-md-12 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="email_user_name">Email / User Name </label>
                        <input type="text" id="email_user_name" name="email_user_name" class="form-control " />
                        @error('email_user_name')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                  </div>

                </div>

                <div class="row">

                  <div class="col-md-12 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" name="password"class="form-control " />
                        @error('password')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                  </div>

                </div>

                <div class="mt-4 pt-2 d-flex justify-content-center">
                  <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                </div>

                <div class="mt-1 pt-2 d-flex justify-content-center">
                    <a class="text-light" href={{ route('register') }}> << register >> <a>
                </div>

            </form>
        </div>
    </div>

</div>
</div>

@endsection
