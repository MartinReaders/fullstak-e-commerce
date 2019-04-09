@extends('index')

@section('content')
    <link rel="stylesheet" href="">
<div class="form-container">
    <h1>Braintree Drop In Example</h1>

    <form id="signup-form" class="form-body">
        <h2 class="serviceBilling">Payment Information</h2>
        <p style="color:#848484">Please Enter the Cardholder Information</p>

        <div id="dropin-container"></div>

        <div class="clear"></div>
        <div id="submit_button_div">
            <input type="submit" class="btn btn-warning btn-large" id="signup_submit_button" value="Continue">
        </div>

        <div id="message" style="display:none;"></div>

    </form>

</div>
<!-- Load the required client component. -->
<script src="https://js.braintreegateway.com/js/braintree-2.32.1.min.js"></script>
    <script src="valider.js"></script>


@endsection
