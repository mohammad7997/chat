@extends('layout')
@section('content')

<div class="col-md-12 col-xl-7 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
    <div class="row">
        <div class="container col-11 mt-5">
            <form id="register">

                <div class="row">

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="firstName">First Name</label>
                        <input type="text" id="firstName" class="form-control " />
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="lastName">Last Name</label>
                        <input type="text" id="lastName" class="form-control" />
                    </div>
                  </div>

                </div>

                <div class="row">

                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label" for="emailAddress">Email</label>
                        <input type="email" id="emailAddress" class="form-control " />
                    </div>
                  </div>

                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label" for="phoneNumber">User name</label>
                        <input type="tel" id="phoneNumber" class="form-control " />
                    </div>
                  </div>

                </div>

                <div class="row">

                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label" for="emailAddress">Password</label>
                        <input type="email" id="emailAddress" class="form-control " />
                    </div>
                  </div>

                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label" for="phoneNumber">Password Configuration</label>
                        <input type="tel" id="phoneNumber" class="form-control " />
                    </div>
                  </div>

                </div>

                <div class="mt-4 pt-2 d-flex justify-content-center">
                  <input class="btn btn-primary btn-lg " type="submit" value="Submit" />
                </div>

            </form>
        </div>
    </div>

</div>
</div>

@endsection
