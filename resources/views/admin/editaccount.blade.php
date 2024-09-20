@extends('layout.sidebar')
@section('account', 'active')
@section('title', 'Admin | Account')
@section('content')
<!-- Content wrapper -->
@foreach($admins as $admin)
<div class="container rounded bg-white mt-5 mb-5 pt-5" data-aos="fade-up">
    <div class="card border-0 shadow">
        <div class="card-body p-5">
            <form action="{{ route('simpanaccount') }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h4>Edit Profile</h4>
                            <p>For the security of your account, please do not share your personal information with others.</p>
                        </div>
                    </div>
                </div>

                    <hr>
                    <div class="">
                        <div class="d-flex flex-column align-items-center text-center"><img class="rounded-circle mt-5"
                                width="150px" src="/profile/{{ $admin->image }}">
                            <span class="font-weight-bold"></span>
                        </div>
                        <br>
                        <div class="col-md-4 mt-2 input-group flex-nowrap mx-auto">
                            <input class="form-control input @error('image') is-invalid @enderror" type="file"
                                name="image" id="image">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="">
                        <div class="p-3 py-5">
                            <div class="row mt-2">
                                <div class="col-md-12"><label class="labels">Name</label>
                                    <input required type="text"
                                        class="form-control input @error('fullname') is-invalid @enderror "
                                        name="fullname" id="fullname" value="{{ $admin->fullname }}" required>
                                    @error('fullname')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Username</label>
                                    <input required type="text"
                                        class="form-control input @error('username') is-invalid @enderror "
                                        name="username" id="username" value="{{ $admin->username }}" required>
                                    @error('username')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Email</label>
                                    <input type="email"
                                        class="form-control input @error('email') is-invalid @enderror " name="email"
                                        id="email" value="{{ $admin->email }}" readonly>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        {{-- <a href="{{ route('change.password.form') }}" class="btn btn-primary py-3 px-4">Change Password</a> --}}
                        <input class="btn btn-primary me-2" type="submit" value="Save Profile">
                        <a href="{{ route('account') }}" class="btn btn-outline-secondary">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endforeach
@endsection
