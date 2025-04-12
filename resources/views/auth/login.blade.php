@extends('layouts.app')
@section('admin-title', 'Login')
@section('content')
    <!-- Content -->
    <div class="container col-lg-4 mt-5">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <div class="app-brand">
                            <span class="app-brand-logo demo" style="margin-left: 25%">
                                {{-- <img src="{{ asset('assets/admin/theme/img/logo.png') }}" alt=""> --}}
                                @if (!empty(get_setting('logo')))
                                    @if (get_setting('logo'))
                                        <img class="" src="{{ asset('logos/' . get_setting('logo')) }}" alt="logo2"
                                            style="height: 80px;">
                                    @endif
                                @else
                                    <img src="{{ asset('assets/admin/theme/img/Shiv_logo.png') }}" alt=""
                                        class="img-fluid" style="height: 80px;">
                                @endif
                            </span>
                            </a>
                        </div>
                        {{-- <h4 class="mb-3 text-center">Admin Login</h4> --}}
                        <div class="card-body">
                            <div id="welcomeMessage" class="text-center" style="color: #ee8a19">
                                Welcome Back, Admin Please login access to our dashboard.
                            </div>

                            <div class="tab-content">
                                <!-- Admin Tab Pane -->
                                <div class="tab-pane show active" id="solid-rounded-justified-tab1" role="tabpanel"
                                    aria-labelledby="admin-tab">
                                    <form id="adminLoginForm" method="POST" action="{{ url('/check/login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="admin-email" class="form-label text-dark">Email</label>
                                            <input type="text" class="form-control" id="admin-email" name="email"
                                                placeholder="Enter your email" autofocus required />
                                            @if ($errors->has('email'))
                                                <div class="text-danger">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                        <div class="mb-3 form-password-toggle">
                                            <label class="form-label text-dark" for="admin-password">Password</label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="admin-password" class="form-control"
                                                    name="password" placeholder="••••••••••••"
                                                    aria-describedby="password" />
                                            </div>
                                            @if ($errors->has('password'))
                                                <div class="text-danger">{{ $errors->first('password') }}</div>
                                            @endif
                                        </div>

                                        <div class="mb-3">
                                            <button class="btn d-grid w-100 text-white" type="submit" style="background-color: #ee8a19">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Include toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@endsection
