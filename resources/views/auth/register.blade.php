@extends('layout')
@section('content')

<div class="col-md-12 col-xl-7 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
    <div class="row">
        <div class="container col-11 mt-5">
            <form id="register" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" class="form-control"  value="{{ old('first_name') }}"/>
                        @error('first_name')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('last_name') }}"/>
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>

                </div>

                <div class="row">

                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control " value="{{ old('email') }}"/>
                        @error('email')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                  </div>

                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label" for="user_name">User name</label>
                        <input type="text" id="user_name" name="user_name" class="form-control " value="{{ old('user_name') }}"/>
                        @error('user_name')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                  </div>

                </div>

                <div class="row">

                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control " value="{{ old('password') }}"/>
                        @error('password')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                  </div>

                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label" for="password_confirmation">Password Configuration</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control " value="{{ old('password_confirmation') }}"/>
                        @error('password')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                  </div>

                </div>

                <div class="mt-4 pt-2 d-flex justify-content-center">
                    <input class="btn btn-primary btn-lg " type="submit" value="Submit" />
                </div>

                <div class="mt-1 pt-2 d-flex justify-content-center">
                    <a class="text-light" href={{ route('login') }}> << login >> <a>
                </div>

            </form>
        </div>
    </div>

</div>
</div>

@endsection
