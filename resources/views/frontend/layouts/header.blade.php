<header>
    <div class="header-top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <ul class="top-bar-info list-inline-item pl-0 mb-0">
                        {{-- <li class="list-inline-item"><a href="mailto:support@gmail.com"><i
                                    class="icofont-support-faq mr-2"></i>support@novena.com</a></li> --}}
                        <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>
                            {{ get_setting('address') }}</br>
                            @if (get_setting('city') != '' ? get_setting('city') : '')
                                {{ '' . get_setting('city') }}
                            @endif
                            @if (get_setting('zip_code') != '' ? get_setting('zip_code') : '')
                                {{ '-' . get_setting('zip_code') }}
                            @endif
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                        <a href="tel:+23-345-67890">
                            <span>Call Now : </span>
                            <span class="h4"> +91
                                @if (!empty(get_setting('phone_number')))
                                    @if (get_setting('phone_number'))
                                        {{ get_setting('phone_number') }}
                                    @endif
                                @else
                                    8799614263
                                @endif
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                @if (!empty(get_setting('logo')))
                    @if (get_setting('logo'))
                        <img class="" src="{{ asset('logos/' . get_setting('logo')) }}" alt="logo2"
                            style="height: 80px;">
                    @endif
                @else
                    <img src="{{ asset('assets/admin/theme/img/Shiv_logo.png') }}" alt="" class="img-fluid"
                        style="height: 80px;">
                @endif
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonial">Testimonial</a></li>

                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors <i
                                class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown03">
                            <li><a class="dropdown-item" href="doctor.html">Doctors</a></li>
                            <li><a class="dropdown-item" href="doctor-single.html">Doctor Single</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
