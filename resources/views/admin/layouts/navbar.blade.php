<!-- Logo -->
<div class="header-left">
    @if (!empty(get_setting('logo')))
        @if (get_setting('logo'))
            <img class="logo" src="{{ asset('logos/' . get_setting('logo')) }}" alt="logo2" style="height: 97%;">
        @endif
    @else
        <img src="{{ asset('assets/admin/theme/img/Shiv_logo.png') }}" alt="" class="img-fluid"
            style="height: 98%;">
    @endif
    @if (!empty(get_setting('favicon')))
        @if (get_setting('favicon') != '' ? get_setting('favicon') : '')
        <a href="index.html" class="logo logo-small">
            <img src="{{ asset('favicons/' . get_setting('favicon')) }}" alt="Logo" width="30" height="40">
        </a>
        @endif
    @else
        <a href="index.html" class="logo logo-small">
            <img src="{{ asset('assets/admin/theme/img/logo-small.png') }}" alt="Logo" width="30"
                height="40">
        </a>
    @endif
</div>
<!-- /Logo -->

<a href="javascript:void(0);" id="toggle_btn">
    <i class="fe fe-text-align-left"></i>
</a>

<!-- Mobile Menu Toggle -->
<a class="mobile_btn" id="mobile_btn">
    <i class="fa fa-bars"></i>
</a>
<!-- /Mobile Menu Toggle -->

<!-- Header Right Menu -->
<ul class="nav user-menu">

    <!-- User Menu -->
    <li class="nav-item dropdown has-arrow">
        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <span class="user-img"><img class="rounded-circle"
                    src="{{ asset('assets/admin/theme/img/profiles/avatar-01.jpg') }}" width="31"
                    alt=""></span>
        </a>
        <div class="dropdown-menu">
            <div class="user-header">
                <div class="avatar avatar-sm">
                    <img src="{{ asset('assets/admin/theme/img/profiles/avatar-01.jpg') }}" alt="User Image"
                        class="avatar-img rounded-circle">
                </div>
                <div class="user-text">
                    <h6>Admin</h6>
                    <p class="text-muted mb-0">Global Admin</p>
                </div>
            </div>
            {{-- <a class="dropdown-item" href="profile.html">My Profile</a> --}}
            {{-- <a class="dropdown-item" href="{{ route('admin.changePassword') }}"><i class="fa-solid fa-key"></i>
                <span style="margin-left: 2%">Change Password</span></a> --}}
            <a class="dropdown-item" href="{{ route('admin.logout') }}"> <i class="fa-solid fa-right-from-bracket"></i>
                <span style="margin-left: 2%">Logout</span></a>
        </div>
    </li>
    <!-- /User Menu -->
</ul>
<!-- /Header Right Menu -->
