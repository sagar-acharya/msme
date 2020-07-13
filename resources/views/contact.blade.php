@extends('layouts.master')
@section('content')
<section class="section" id="contact" style="padding: 2.5rem 0 !important;">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-8 col-lg-6">
                <!-- Heading -->
                <h2 class="section-title mb-2 ">
                    Get a Call <span class="font-weight-normal">back</span>
                </h2>

                <!-- Subheading -->
                <p class="mb-5 ">
                    If you have any question, Please leave your number we will call you back or Catch us on support@udyamonline.org
                    OR WhatsApp On +91 9876543210
                </p>

            </div>
        </div> <!-- / .row -->

        <div class="row">
            <div class="col-lg-12">
               <!-- form message -->
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                            Your message was sent successfully.
                        </div>
                    </div>
                </div>
                <!-- end message -->
                <!-- Contacts Form -->
                <form class="contact_form" action="mail.php">
                    <div class="row">
                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    Your name
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group">
                                    <input class="form-control" name="name" id="name" required="" placeholder="Please enter your name here" type="text">
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    Your email address
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control" name="email" id="email" required="" placeholder="Please enter your email here" type="email">
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <div class="w-100"></div>

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    Your Phone Number
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control" id="phone" name="phone" required="" placeholder="Please enter your mobile number here" type="text">
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->
                    </div>

                    <!-- Input -->
                    <div class="form-group mb-5">
                        <label class="h6 small d-block text-uppercase">
                            How can we help you?
                        </label>

                        <div class="input-group">
                            <textarea class="form-control" rows="4" name="message" id="message" required="" placeholder="Please write your message here"></textarea>
                        </div>
                    </div>
                    <!-- End Input -->

                    <div class="">
                       <input name="submit" type="submit" class="btn btn-primary btn-circled" value="Send Message">

                        <p class="small pt-3">We'll get back to you in 24hrs.</p>
                    </div>
                </form>
                <!-- End Contacts Form -->
            </div>
        </div>
    </div>
</section>

@endsection
@section('js')
<script>

</script>
@endsection
