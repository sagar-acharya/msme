@extends('layouts.master')
@section('content')
<section class="section" id="contact" style="padding: 0.1rem 0 !important;">
    <!-- Content -->
    <div class="container">
        <div class="row  align-items-center">
            <div class="col-md-12 col-lg-12 text-center text-lg-left">
               <h1>Your Order ID: {{$orderId}}</h1>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>
@endsection
@section('js')
<script>
$(window).load(function() {
    $(".razorpay-payment-button").addClass("blue");
});

$( document ).ready(function() {
    $(".razorpay-payment-button").addClass("blue");
});
$("body").on("load", function() {
    $(".razorpay-payment-button").addClass("blue");
});
</script>
@endsection
