@extends('layout.layout')
@section('title', 'User Profile')
@section('content')
    <div class="card border-0 shadow" data-aos="fade-up">
        <div class="container round bg-white mt-5 mb-5 p-5">
            <div class="card border-0 shadow">
                <div class="card-body p-5 text-center">
                    <h4 class="card-title text-center">Profile</h4>
                    {{-- <p class="card-title text-center">Perbarui informasi profil anda di bawah:</p> --}}
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="border-right border-white mb-4 d-flex justify-content-center align-items-center">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img class="rounded-circle" width="150px" src="/profile/{{ $user->image }}">
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
                                            <p class="text-muted mb-0">{{ $user->fullname }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3 col-lg-3">
                                            <p class="mb-0">Username</p>
                                        </div>
                                        <div class="col-sm-9 col-lg-9">
                                            <p class="text-muted mb-0">{{ $user->username }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3 col-lg-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9 col-lg-9">
                                            <p class="text-muted mb-0">{{ $user->email }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-2 text-center">
                                <a href="{{ route('profile.edit') }}" class="btn btn-primary py-3 px-4">Edit Profile</a>
                                <a href="{{route('home')}}" class="btn btn-primary py-3 px-4">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
