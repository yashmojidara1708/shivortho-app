<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Shivam Ortho</title>

    <!-- Favicon -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" /> --}}

    @if (!empty(get_setting('favicon')))
        @if (get_setting('favicon') != '' ? get_setting('favicon') : '')
            <link rel="icon" type="image/png" sizes="56x56"
                href="{{ asset('favicons/' . get_setting('favicon')) }}">
        @endif
    @else
        <link rel="icon" type="image/png" sizes="56x56" alt="!!">
    @endif

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/icofont/icofont.min.css') }}">

    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/slick-carousel/slick/slick.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/slick-carousel/slick/slick-theme.css') }}">


    <!-- Main Stylesheet -->

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">


</head>

<body id="top">

    {{-- header section --}}
    @include('frontend.layouts.header')
    {{-- header section end --}}

    <!-- Slider Start -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        <span class="text-uppercase text-sm letter-spacing ">Total Health care solution</span>
                        <h1 class="mb-3 mt-3">Your most trusted health partner</h1>

                        <p class="mb-4 pr-5">A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam
                            aperiam maiores sunt fugit, deserunt rem suscipit placeat.</p>
                        <div class="btn-container">
                            <a href="#contact" class="btn btn-main btn-round-full">Make a appoinment <i
                                    class="icofont-simple-right ml-2  "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider End -->

    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-block d-lg-flex">
                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-surgeon-alt"></i>
                            </div>
                            <span>24 Hours Service</span>
                            <h4 class="mb-3">Online Appoinment</h4>
                            <p class="mb-4">Get ALl time support for emergency.We have introduced the principle of
                                family medicine.</p>
                            <a href="#contact" class="btn btn-main btn-round-full">Make a appoinment</a>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-ui-clock"></i>
                            </div>
                            <span>Timing schedule</span>
                            <h4 class="mb-3">Working Hours</h4>
                            <ul class="w-hours list-unstyled">
                                <li class="d-flex justify-content-between">Mon - Sun : <span>10:00 AM - 07:00 PM</span>
                                </li>
                                {{-- <li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span></li> --}}
                                {{-- <li class="d-flex justify-content-between">Sat - sun : <span>10:00 - 17:00</span></li> --}}
                            </ul>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-support"></i>
                            </div>
                            <span>Emegency Cases</span>
                            <h4 class="mb-3">+91
                                @if (!empty(get_setting('phone_number')))
                                    @if (get_setting('phone_number'))
                                        {{ get_setting('phone_number') }}
                                    @endif
                                @else
                                    8799614263
                                @endif</h4>
                            <p>Get ALl time support for emergency.We have introduced the principle of family
                                medicine.Get Conneted with us for any urgency .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img">
                        <img src="{{ asset('assets/frontend/images/about/img-1.jpg') }}" alt=""
                            class="img-fluid">
                        <img src="{{ asset('assets/frontend/images/about/img-2.jpg') }}" alt=""
                            class="img-fluid mt-4">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img mt-4 mt-lg-0">
                        <img src="{{ asset('assets/frontend/images/about/img-3.jpg') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <h2 class="title-color">Personal care <br>& healthy living</h2>
                        <p class="mt-4 mb-5">We provide best leading medicle service Nulla perferendis veniam deleniti
                            ipsum officia dolores repellat laudantium obcaecati neque.</p>

                        {{-- <a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Services<i
                                class="icofont-simple-right ml-3"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="cta-section ">
        <div class="container">
            <div class="cta position-relative">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-doctor"></i>
                            <span class="h3">58</span>k
                            <p>Happy People</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-flag"></i>
                            <span class="h3">700</span>+
                            <p>Surgery Comepleted</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-badge"></i>
                            <span class="h3">40</span>+
                            <p>Expert Doctors</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-globe"></i>
                            <span class="h3">20</span>
                            <p>Worldwide Branch</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section service-2" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/frontend/images/service/service-1.jpg') }}" alt=""
                            class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Child care</h4>
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/frontend/images/service/service-2.jpg') }}" alt=""
                            class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2  title-color">Personal Care</h4>
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/frontend/images/service/service-3.jpg') }}" alt=""
                            class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">CT scan</h4>
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5 mb-lg-0">
                        <img src="{{ asset('assets/frontend/images/service/service-4.jpg') }}" alt=""
                            class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Joint replacement</h4>
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5 mb-lg-0">
                        <img src="{{ asset('assets/frontend/images/service/service-6.jpg') }}" alt=""
                            class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Examination & Diagnosis</h4>
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5 mb-lg-0">
                        <img src="{{ asset('assets/frontend/images/service/service-8.jpg') }}" alt=""
                            class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Alzheimer's disease</h4>
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="section appoinment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 ">
                    <div class="appoinment-content">
                        <img src="{{ asset('assets/frontend/images/about/img-3.jpg') }}" alt="" class="img-fluid">
                        <div class="emergency">
                            <h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>+23 345 67980</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 ">
                    <div class="appoinment-wrap mt-5 mt-lg-0">
                        <h2 class="mb-2 title-color">Book appoinment</h2>
                        <p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit . Iste dolorum atque similique praesentium soluta.</p>
                        <form id="#" class="appoinment-form" method="post" action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Choose Department</option>
                                            <option>Software Design</option>
                                            <option>Development cycle</option>
                                            <option>Software Development</option>
                                            <option>Maintenance</option>
                                            <option>Process Query</option>
                                            <option>Cost and Duration</option>
                                            <option>Modal Delivery</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect2">
                                            <option>Select Doctors</option>
                                            <option>Software Design</option>
                                            <option>Development cycle</option>
                                            <option>Software Development</option>
                                            <option>Maintenance</option>
                                            <option>Process Query</option>
                                            <option>Cost and Duration</option>
                                            <option>Modal Delivery</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="time" id="time" type="text" class="form-control" placeholder="Time">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Full Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="phone" id="phone" type="Number" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-2 mb-4">
                                <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                            </div>

                            <a class="btn btn-main btn-round-full" href="appoinment.html">Make Appoinment <i class="icofont-simple-right ml-2  "></i></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="section testimonial-2 gray-bg" id="testimonial">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h2>We served over 5000+ Patients</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                            molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 testimonial-wrap-2">
                    <div class="testimonial-block style-2  gray-bg">
                        <i class="icofont-quote-right"></i>

                        <div class="testimonial-thumb">
                            <img src="{{ asset('assets/frontend/images/team/testimonial.png') }}" alt=""
                                class="img-fluid">
                        </div>

                        <div class="client-info ">
                            <h4>Very friendly and reliable service!</h4>
                            <span>Priya Menon</span>
                            <p>
                                I had a smooth experience with their team. They were always ready to help and made sure
                                everything was taken care of. Felt really comfortable throughout the process.
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-block style-2  gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('assets/frontend/images/team/testimonial.png') }}" alt=""
                                class="img-fluid">
                        </div>

                        <div class="client-info ">
                            <h4>Truly professional and fast!</h4>
                            <span>Amit Verma</span>
                            <p>
                                I am impressed by their efficiency and professionalism. Everything was handled quickly
                                and with proper updates. Great job by the entire team!
                            </p>
                        </div>

                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block style-2  gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('assets/frontend/images/team/testimonial.png') }}" alt=""
                                class="img-fluid">
                        </div>

                        <div class="client-info ">
                            <h4>Great service at a reasonable price!</h4>
                            <span>Neha Desai</span>
                            <p>
                                It's hard to find such quality service these days. They delivered exactly what was
                                promised and did it within budget. Totally worth it!
                            </p>
                        </div>

                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block style-2  gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('assets/frontend/images/team/testimonial.png') }}" alt=""
                                class="img-fluid">
                        </div>

                        <div class="client-info ">
                            <h4>Had a very smooth experience!</h4>
                            <span>Karan Malhotra</span>
                            <p>
                                From start to finish, everything went perfectly. Communication was clear and the team
                                was super cooperative. Would definitely recommend them to others.
                            </p>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Start -->
    <section class="contact" id="contact">
        <section class="section contact-info pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="contact-block mb-4 mb-lg-0">
                            <i class="icofont-live-support"></i>
                            <h5>Call Us</h5>
                            +91
                            @if (!empty(get_setting('phone_number')))
                                @if (get_setting('phone_number'))
                                    {{ get_setting('phone_number') }}
                                @endif
                            @else
                                8799614263
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="contact-block mb-4 mb-lg-0">
                            <i class="icofont-support-faq"></i>
                            <h5>Email Us</h5>
                            contact@mail.com
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="contact-block mb-4 mb-lg-0" style="padding:24px 25px;">
                            <i class="icofont-location-pin"></i>
                            <h5>Location</h5>
                            {{ get_setting('address') }}
                            @if (get_setting('city') != '' ? get_setting('city') : '')
                                {{ '' . get_setting('city') }}
                            @endif
                            @if (get_setting('zip_code') != '' ? get_setting('zip_code') : '')
                                {{ '-' . get_setting('zip_code') }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- contac us --}}
        @include('frontend.layouts.contact')
        {{-- contact us end  --}}
        {{-- location --}}
        <div class="google-map p-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29382.818718353494!2d72.56616711616516!3d22.99245671346415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e856ec91aea9f%3A0x387178c77781ef61!2sShivam%20Orthopedic%20And%20Medical%20Hospital!5e0!3m2!1sen!2sin!4v1744301392390!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        {{-- end location --}}
    </section>


    @include('frontend.layouts.footer')

    <script type="text/javascript">
        var BASE_URL = "{{ url('/') }}";
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
    </script>

    <!-- Main jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="{{ asset('assets/frontend/plugins/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/counterup/jquery.easing.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assets/frontend/plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <!-- Counterup -->
    <script src="{{ asset('assets/frontend/plugins/counterup/jquery.waypoints.min.js') }}"></script>

    {{-- <script src="{{ asset('assets/frontend/plugins/shuffle/shuffle.min.js') }}"></script> --}}
    <script src="{{ asset('assets/frontend/plugins/counterup/jquery.counterup.min.js') }}"></script>
     {{-- toastr --}}
     <link rel="stylesheet" href="{{ asset('assets/admin/theme/cdnFiles/toastr.css') }}" />
     <script src="{{ asset('assets/admin/theme/cdnFiles/toastr.min.js') }}"></script>

    <!-- Essential Scripts -->
    <script src="{{ asset('assets/frontend/plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/admin/theme/cdnFiles/jquery.validate.min.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script> --}}
    <script src="{{ asset('assets/frontend/plugins/google-map/map.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/script.js') }}"></script>
    @yield('frontend-footer')
    <!-- Main Script -->
    <script>
        $(document).ready(function() {
            // Initialize Slick Slider
            $('.testimonial-wrap-2').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                adaptiveHeight: true,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });

            // Fix for mobile menu
            $('.navbar-toggler').on('click', function() {
                $(this).toggleClass('active');
            });

            // Smooth scrolling for anchor links
            $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                    location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top - 70
                        }, 1000);
                    }
                }
            });

            // Fix for responsive images
            $('img').each(function() {
                if (!$(this).hasClass('img-fluid')) {
                    $(this).addClass('img-fluid');
                }
            });

        });
    </script>
</body>

</html>
