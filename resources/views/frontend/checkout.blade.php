@extends('frontend.base')
@section('main_content')
<!-- 
<link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>


<div class="breadcrumb-area section-padding-1 border-top-2 border-bottom-2 pt-50 pb-50">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center breadcrumb-center">
            <h2>Checkout</h2>
            <ul>
                <li>
                    <a href="{{ URL::to('/') }}">Home</a>
                </li>
                <li>Checkout</li>
            </ul>
        </div>
    </div>
</div>
<div class="checkout-main-area pt-60 pb-60">
    <div class="container">
        <div class="checkout-wrap">
            <div class="col-12">
                <div class="your-order-area">
                    <h3>Your order</h3>
                    <div class="your-order-wrap gray-bg-4">
                        <div class="your-order-info-wrap">
                            <div class="your-order-info">
                                <ul>
                                    <li>Product <span>Total</span></li>
                                </ul>
                            </div>
                            <div class="your-order-middle">
                                <ul>
                                    @foreach($checkout as $cartProduct)
                                    <li>{{ $cartProduct->name }}  <span>৳ {{ $cartProduct->price }} X  {{ $cartProduct->qty }} = {{ $cartProduct->price * $cartProduct->qty }}</span> </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="your-order-info order-subtotal">
                                <ul>
                                    <li>Subtotal <span>৳ {{Cart::subtotal()}} </span></li>
                                </ul>
                            </div>
                            <div class="your-order-info order-shipping">
                                <ul>
                                    <li>Tax <p>৳ {{ Cart::tax() }} </p></li>
                                </ul>
                            </div>
                            <div class="your-order-info order-total">
                                <ul>
                                    <li>Total <span >৳ {{Cart::total()}} </span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="payment-method">
                            <div class="pay-top sin-payment sin-payment-3">
                                <label for="payment-method-4">Stripe Payment <img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJcAAAA9CAMAAACXxgvDAAAAZlBMVEX///9ncuVkb+VdaeRfa+SDjOmts/DFyfS6vvL8/P50fudWY+Pd3/hhbeRweubw8fzT1vbh4/nAxPOlq+6Nlev29v2qr+/n6PqAielsdubY2/h6g+jN0PWYn+yyt/GRmetLWuKgpu5p0zNWAAAE6klEQVRoge2a2YKyOgyAoakIlFK2Csiivv9LnpalC+CIR8fx4s/VCCH5bLMVx3HeLJy/2+LrUranA83+msKS4OxfYgoYwfGvUSzJCUbIFfJlXB51R/ksV3B+4M7Dn+biZdbFhDQ/a32a63SoCYg9Qoev4gpiNLrbx4UoXL+MCyjQ+tAnnymrQezu4+qrvC0/gjTIbq7gMzzK3V6uXxWeHn3P6/02Yru5eJSk7M69yUZ07E9+e0cpKFv/5PnJfRvtxcWAMcUYADV5YnG5bjhIfXacLB7/dpnDOwQAbuD007WwlvlYTJ8a7gR9DCCMAirOa58sjzEMLmm13fDPNSBXi8h4l1tcaBAQuD5Mf7cMDe0HBaJOoOmi5KrmD+UZ4dksIsUiWYMbUOUUQb0BfiIm1ajILK6pbEquqYaiPBwfGrjMunqYq0uBzYcpSk2fZQy2Q9IvsW62xj4uF83u73G5iy+LqFFLUrRaCvBsrIyssXZwKc27XCubtdpKBhtKdhfjm2Z+g8ull9lps6lDzbz0N3bxl7hcMgV3r30iqqNfc1tmEKZI5PSgt+Cig5A1l8i7n7hk7TEeQOPAxKi6QAsvD5UG0RGotxFfUsZZKo4Pot7YXLF3kpKXNheGuAkxv8uF3DyJzr2RABBJn0qfFsPOHdXnm85XtaS1usaykLA79d7gglvJg4At5y+dj4cxXpiOJprLCyqlq8nocU69WrXadOZC1lCa8Mdc0XztDhed04+rR1AoHJ9nl6AqWjU9A6q66vWC1rHlZy6sW8cjLqdVpQhEKOR0tRLZRIFVDePGvnT2EPWAS1ebO1xYp/08YQ5fft5WI5rmXUOFulTpqKTQZEYXeyOXjnTP4fX8d+8EozjlvISxCjCrfiEgRTvfeiNXpKK4c0q1Q5goUUuj1kVN8Qot9t/OxVSOFppxS0A/Uy57FYKwfDOX2jthKvmRyxg60nrVW4aG8U4uZapy2r1cYvBcDWC4/Pv1knt5AWyhyVL8J/G1PO8xvwJqKIidfJULNvJR1KxURY08HizkunEESXOkA4127+TyjfplrF0arWTzLBrkao1R/E6uyqj3+vVC5ewW3ZapwdVsKDwTX6nVH4sN8LV0VrvWIxsO9PyFXuTSg47sM3pTux+4KlHfNbcae+R6zcntYv//cKm+3OlNkCRMr559NmM3YwGFGUyqPmKBPLWHKihjs0PBqeS8zNKnuFwcHkvO2kYXBkgcSwMO0dQQhfUDudpccrQHFDZNrFuS/LLGqCGndHxNnuMShQCLs7vxeRwXjMoquvGh6y5FVYPQI0uuUcesrLITncyC5i7OQ3u4lgL+0ufglqLJ9TaXKUMKlosT76tcIjamQKLbCo+5xkF7ce9VLlAngnbrjL+Di4wLzuxB40UuYrxM2nz5YHFVazNojgMRoebdZ7msb6WNjpbd9V4iMx/7mtgaiFR62Dibxsk9Lut3GM3VU+NQUyeOJbyDpd/YIg+Sm0vEeV2+S8OipReWAZ4DyHyhGEglmkh/nSbyq96V3Lqm6z1nHZF25cuFft2QyxMiWNqWCkC7ZK3Ckiy/FMUlz6LVvaD1LsXl5u99O2/1IX4Udrt+bXVCO3qdcHvrP/CefWsu/Ab5x/Wc/ON6Tv5xPSfqdwXydVyycbhV/uHf/x5IRXDTZdHX/UvM8fwq0n+XskrTiZZC4QAAAABJRU5ErkJggg=="></label>
                                <div class="payment-box payment_method_bacs">
                                <p>Make your payment on Stripe.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div>
                            <div>
                                <div class="panel panel-default">
                                    <div class="panel-body">

                                        @if (Session::has('success'))
                                        <div class="alert alert-primary text-center">
                                            <p>{{ Session::get('success') }}</p>
                                        </div>
                                        @endif

                                        <form role="form" action="{{ route('make-payment') }}" method="post" class="stripe-payment"
                                            data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                            id="stripe-payment">
                                            @csrf

                                            <div class='form-row row'>
                                                <div class='col-xs-12 form-group required'>
                                                    <label class='control-label'>Name on Card</label> <input class='form-control'
                                                        size='4' type='text'>
                                                </div>
                                            </div>

                                            <div class='form-row row'>
                                                <div class='col-xs-12 form-group card required'>
                                                    <label class='control-label'>Card Number</label> <input autocomplete='off'
                                                        class='form-control card-num' size='20' type='text'>
                                                </div>
                                            </div>

                                            <div class='form-row row'>
                                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                    <label class='control-label'>CVC</label>
                                                    <input autocomplete='off' class='form-control card-cvc' placeholder='e.g 595'
                                                        size='4' type='text'>
                                                </div>
                                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                    <label class='control-label'>Expiration Month</label> <input
                                                        class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                                </div>
                                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                    <label class='control-label'>Expiration Year</label> <input
                                                        class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                                        <input type="hidden" name="total" value="{{Cart::total()}}">
                                                </div>
                                            </div>

                                            <div class='form-row row'>
                                                <div class='col-md-12 hide error form-group'>
                                                    <div class='alert-danger alert'>Fix the errors before you begin.</div>
                                                </div>
                                            </div>

                                            <div class="Place-order mt-25">
                                                <button class="btn btn-success btn-lg btn-block" type="submit">Place Order</button>
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
    </div>
</div>



<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function () {
        var $form = $(".stripe-payment");
        $('form.stripe-payment').bind('submit', function (e) {
            var $form = $(".stripe-payment"),
                inputVal = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'
                ].join(', '),
                $inputs = $form.find('.required').find(inputVal),
                $errorStatus = $form.find('div.error'),
                valid = true;
            $errorStatus.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function (i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorStatus.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-num').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeRes);
            }

        });

        function stripeRes(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                var token = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });

</script> -->



<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/contact_styles.css')}}">

<style type="text/css">
	/**
	 * The CSS shown here will not be introduced in the Quickstart guide, but shows
	 * how you can use CSS to style your Element's container.
	 */
	.StripeElement {
	  box-sizing: border-box;

	  height: 40px;
	  width: 100%;

	  padding: 10px 12px;

	  border: 1px solid transparent;
	  border-radius: 4px;
	  background-color: white;

	  box-shadow: 0 1px 3px 0 #e6ebf1;
	  -webkit-transition: box-shadow 150ms ease;
	  transition: box-shadow 150ms ease;
	}

	.StripeElement--focus {
	  box-shadow: 0 1px 3px 0 #cfd7df;
	}

	.StripeElement--invalid {
	  border-color: #fa755a;
	}

	.StripeElement--webkit-autofill {
	  background-color: #fefde5 !important;
	}
</style>
    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 "  style="border-right: 1px solid grey; padding: 20px;">
                    <div class="cart_container">
                    	<div class="contact_form_title text-center">Cart Products</div>
						<div class="cart_items">
							<ul class="cart_list">
							@foreach($checkout as $row)
								<li class="cart_item clearfix">
								
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
										
										<img src="{{ asset($row->options->image) }}" style="height: 60px;">
										</div>
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_text">{{ $row->name }}</div>
										</div>

										<div class="cart_item_quantity cart_info_col">
											{{ $row->qty }}
										</div>
										<div class="cart_item_price cart_info_col">
											<div class="cart_item_text">${{ $row->price }}</div>
										</div>
										<div class="cart_item_total cart_info_col">
											<div class="cart_item_text">${{ $row->price * $row->qty }}</div>
										</div>
										
									</div>
								</li>
								@endforeach
							</ul>
						</div>
						   <br><br><hr>
					
						<ul class="list-group col-lg-8" >
							  @if(Session::has('coupon'))
							       <li class="list-group-item">Subtotal :  <span style="float: right;"> $ {{ Session::get('coupon')['balance'] }}</span> </li>
							        <li class="list-group-item">Coupon : ({{   Session::get('coupon')['name'] }})  <span style="float: right;"> $  {{ Session::get('coupon')['discount'] }} </span> </li>
							  	@else
							  	  <li class="list-group-item">Subtotal :  <span style="float: right;"> $ {{ Cart::Subtotal() }}</span> </li>
							  	  <li class="list-group-item">Tax :  <span style="float: right;"> $ {{ Cart::tax() }}</span> </li>
							  	  <li class="list-group-item">Total :  <span style="float: right;"> $ {{ Cart::total() }}</span> </li>
							  	@endif
							  
							  @if(Session::has('coupon'))
							  <li class="list-group-item">Total:  <span style="float: right;"> $ {{ Session::get('coupon')['balance'] + $charge }}</span> </li>
							  @else
							  @endif
						</ul>
					</div>
                </div>

                 <div class="col-lg-5 " style=" padding: 20px;">
                    <div class="contact_form_container">
                        <div class="contact_form_title text-center">Pay Now </div>

                        <form action="{{ route('make-payment') }}" method="post" id="payment-form" style="border: 1px solid grey; padding: 20px;">
                        	@csrf
                          <div class="form-row">
                            <label for="card-element">
                              Credit or debit card
                            </label>
                            <div id="card-element">
                              <!-- A Stripe Element will be inserted here. -->
                            </div>

                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                          </div><br>
                        {{--   extra data --}}
                           <input type="hidden" name="total" value="{{ Cart::total() }}">
                             {{-- shipping details pass --}}
                          <button class="btn btn-info">Pay Now</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="panel"></div>
    </div>

<script src="https://js.stripe.com/v3/"></script>

<script type="text/javascript">
        // Create a Stripe client.
    var stripe = Stripe('pk_test_51HRYkHLVyBJtXGUEldzREPwGFeCrFbQ2d90zn1xoaR26qyN8tqOFs7GizIgNEDPb0ul6iyAmiZAYTyl7xlkdiMdJ00QkYEDZqL');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
    base: {
        color: '#32325d',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
        color: '#aab7c4'
        }
    },
    invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
    }
    };

    // Create an instance of the card Element.
    var card = elements.create('card', {style: style});

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
    var displayError = document.getElementById('card-errors');
    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
        displayError.textContent = '';
    }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
    event.preventDefault();

    stripe.createToken(card).then(function(result) {
        if (result.error) {
        // Inform the user if there was an error.
        var errorElement = document.getElementById('card-errors');
        errorElement.textContent = result.error.message;
        } else {
        // Send the token to your server.
        stripeTokenHandler(result.token);
        }
    });
    });

    // Submit the form with the token ID.
    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();
    }
</script>
@endsection