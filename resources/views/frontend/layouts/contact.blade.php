<section class="contact-form-wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="text-md mb-2">Contact us</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p class="mb-5">Laboriosam exercitationem molestias beatae eos pariatur, similique,
                        excepturi mollitia sit perferendis maiores ratione aliquam?</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form onsubmit="return false" method="POST" id="contactform" name="contactform"
                    enctype="multipart/form-data">
                    <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control"
                                    placeholder="Your Full Name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" id="email" type="email" class="form-control"
                                    placeholder="Your Email Address">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="topic" id="topic" type="text" class="form-control"
                                    placeholder="Your Query Topic">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phoneNumber" id="phoneNumber" type="text" class="form-control"
                                    placeholder="Your Phone Number">
                            </div>
                        </div>
                    </div>

                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="8" placeholder="Your Message"></textarea>
                        <label for="message" class="error" style="display: none; color: #dc3545;"></label>
                    </div>

                    <div class="btn-container">
                        <button class="btn btn-main btn-round-full" id="submit" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@section('frontend-footer')
    <script>
        $(document).ready(function() {
            $('form[id="contactform"]').validate({
                rules: {
                    name: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    topic: "required",
                    phoneNumber: {
                        required: true,
                        number: true
                    },
                    message: "required"
                },
                messages: {
                    name: "Please enter your name",
                    email: {
                        required: "Please enter your email",
                        email: "Please enter a valid email address"
                    },
                    topic: "Please enter your query topic",
                    phoneNumber: {
                        required: "Please enter your phone number",
                        number: "Please enter numbers only"
                    },
                    message: "Please enter your message"
                },
                submitHandler: function(form) {
                    $('#loader-container').show();

                    var formData = new FormData(form);

                    $.ajax({
                        url: BASE_URL + '/contact/save',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        cache: false,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        beforeSend: function() {
                            // Clear any previous error messages
                            $('.alert').hide();
                            $('.error').hide();
                        },
                        success: function(response) {
                            if (response.status == 1) {
                                if (response.status == 1) {
                                    toastr.success(response.message);
                                    $('#loader-container').hide();
                                    $('#contactform')[0].reset();
                                } else {
                                    toastr.error(response.message);
                                }
                            }
                        },
                    });
                }
            });
        });
    </script>
@endsection
