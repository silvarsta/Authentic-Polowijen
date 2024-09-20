@extends('layout.sidebar')
@section('account', 'active')
@section('title', 'Admin | Account')
@section('content')
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

    <div class="row">
      <div class="col-md-12">

        <div class="card mb-4">
          <h5 class="card-header">Profile Details</h5>
          <!-- Account -->
          @foreach($admins as $admin)
          <div class="row">
            <div class="col-md-12">
                <div class="border-right border-white mb-4 d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img class="rounded-circle" width="150px" src="/profile/{{ $admin->image }}">
                        <span class="font-weight-bold"></span>
                    </div>
                </div>
            </div>
        </div>

            <hr>
            <div class="col-lg-12 text-center">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3 col-lg-3">
                                <p class="mb-0">User</p>
                            </div>
                            <div class="col-sm-9 col-lg-9">
                                <p class="text-muted mb-0">{{ $admin->fullname }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3 col-lg-3">
                                <p class="mb-0">Username</p>
                            </div>
                            <div class="col-sm-9 col-lg-9">
                                <p class="text-muted mb-0">{{ $admin->username }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3 col-lg-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9 col-lg-9">
                                <p class="text-muted mb-0">{{ $admin->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-2 text-center">
                    <a href="{{ route('editaccount') }}" class="btn btn-primary me-2">Edit Profile</a>
                </div>
                <br>
                {{-- <div class="mt-2">
                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                  </div> --}}
            </div>
          @endforeach
          <!-- /Account -->
        </div>
        <div class="card">
          <h5 class="card-header">Delete Account</h5>
          <div class="card-body">
            <div class="mb-3 col-12 mb-0">
              <div class="alert alert-warning">
                <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
              </div>
            </div>
            <form id="formAccountDeactivation" onsubmit="return false">
              <div class="form-check mb-3">
                <input
                  class="form-check-input"
                  type="checkbox"
                  name="accountActivation"
                  id="accountActivation"
                />
                <label class="form-check-label" for="accountActivation"
                  >I confirm my account deactivation</label
                >
              </div>
              <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / Content -->
@endsection
