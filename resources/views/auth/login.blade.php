@extends('layout')
@section('content')

<div class="col-md-12 col-xl-7 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
    <div class="row">
        <div class="container col-6 login">
            <form id="register">

                <div class="row">

                  <div class="col-md-12 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="firstName">Email / User Name </label>
                        <input type="text" id="firstName" class="form-control " />
                    </div>
                  </div>

                </div>

                <div class="row">

                  <div class="col-md-12 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="firstName">Password</label>
                        <input type="text" id="firstName" class="form-control " />
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
