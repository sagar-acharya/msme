@extends('layouts.master')
@section('content')
<section class="section" id="contact" style="padding: 0.1rem 0 !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="border: 1px solid #5964C6;">
                <!-- Contacts Form -->
                <form class="contact_form" action="mail.php">
                    <div class="row">
                        <div class="col-sm-12 mb-12" style="background-color: #5964C6;text-align:center;color:#fff; font-size:20px;">
                            <p style="font-weight: bold;">Track Your Udyam Application Here</p>
                        </div>
                    </div>
                    <br/>
                    <div class="row">

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    Mobile No / मोबाइल नंबर
                                </label>

                                <div class="input-group ">
                                    <input class="form-control" name="email" id="email" required="" placeholder="Please enter mobile no here/ कृपया मोबाइल नंबर यहाँ दर्ज करें" type="text">
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                         <!-- Input -->
                         <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    <span style="color: #5964C6;">OR</span>
                                </label>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    Order No / आदेश संख्या
                                </label>

                                <div class="input-group ">
                                    <input class="form-control" name="email" id="email" required="" placeholder="Please enter order no here/ कृपया यहाँ आदेश संख्या दर्ज करें" type="text">
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                    <div class="col-sm-12 mb-12">
                        <div class="form-group">
                            <input name="submit" type="submit" class="btn btn-primary btn-circled" value="Submit">
                        </div>
                    </div>
                </form>
                <!-- End Contacts Form -->
            </div>
        </div>
    </div>
</section>
<br/>
    <section class="section" id="contact" style="padding: 0.1rem 0 !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Contacts Form -->
                    <form class="contact_form" action="mail.php">
                        <div class="row">
                            <div class="col-sm-12 mb-12" style="text-align:center;color:#5964C6; font-size:20px;">
                                <p style="font-weight: bold;">Your Udyam Application Status /
                                    आपका उदयम आवेदन की स्थिति</p>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <!-- Input -->
                            <div class="col-sm-12 mb-12">
                                <div class="form-group">
                                    <table class="form-group" width="100%" style="text-align: center;" border="1">
                                        <tr style="background-color: #f2f2f2;font-weight:bold">
                                            <td>Order No</td>
                                            <td>NAME OF ENTREPRENEUR/ APPLICANT</td>
                                            <td>Requested Date</td>
                                            <td>Staus</td>
                                        </tr>
                                        <tr>
                                            <td>UDM2307201001</td>
                                            <td>XYZ Service Pvt Ltd</td>
                                            <td>23/07/2020</td>
                                            <td>In Progress</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- End Input -->
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
