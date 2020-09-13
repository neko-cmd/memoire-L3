@extends('layouts.default')

@section('title', 'chekout')


@section('extra-css')
    <style>
        .mt-32 {
            margin-top: 32px;
        }
    </style>

    <script src="https://js.stripe.com/v3/"></script>
    

@endsection

@section('content')
<link rel="stylesheet" href="css/checkout.css">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/form.css">


    <div class="sectionnn">
        <div class="container">
            @if (session()->has('success_message'))
                <div class="spacer"></div>
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="spacer"></div>
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h1 class="checkout-heading stylish-heading">Check-out</h1>
            <div class="checkout-section">
                <div>
                    <form action="{{route('checkout.store') }}" method=POST  id="payment-form">
                        {{ csrf_field() }}
                        <h2>Détails de la facturation</h2>

                        <div class="form-group">
                            <label for="email">Adresse e-mail</label>
                            @if (auth()->user())
                                <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                            @else
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" readonly>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="name">Nom</label>
                            @if (auth()->user())
                                <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->first_name}}" readonly>
                            @else
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('first_name') }}"  readonly>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="address">Addresse</label>
                            @if (auth()->user())
                                <input type="text" class="form-control" id="address" name="address" value=""  required>
                            @else
                                <input type="text" class="form-control" id="address" name="address" value=""  readonly>
                            @endif
                        </div>

                        <div class="half-form">
                            <div class="form-group">
                                <label for="city">Ville</label>
                                @if (auth()->user())
                                    <input type="text" class="form-control" id="city" name="city" value=""  required>
                                @else
                                    <input type="text" class="form-control" id="city" name="city" value=""  readonly>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="province">Province</label>
                                @if (auth()->user())
                                    <input type="text" class="form-control" id="province" name="province" value=""  required>
                                @else
                                    <input type="text" class="form-control" id="province" name="province" value=""  readonly>
                                @endif
                            </div>
                        </div> <!-- end half-form -->

                        <div class="half-form">
                            <div class="form-group">
                                <label for="postalcode">Code postal</label>
                                @if (auth()->user())
                                    <input type="text" class="form-control" id="postalcode" name="postalcode" value=""  required>
                                @else
                                    <input type="text" class="form-control" id="postalcode" name="postalcode" value=""  readonly>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="phone">Téléphone</label>
                                @if (auth()->user())
                                    <input type="text" class="form-control" id="phone" name="phone" value=""  required>
                                @else
                                    <input type="text" class="form-control" id="phone" name="phone" value=""  readonly>
                                @endif
                            </div>
                        </div> <!-- end half-form -->

                        <div class="spacer"></div>

                        <h2>Détails de paiement</h2>

                        <div class="form-group">
                        <label for="name_on_card">Nom sur la carte</label>
                        @if (auth()->user())
                            <input type="text" class="form-control" id="name_on_card" name="name_on_card" value=""  required>
                        @else
                            <input type="text" class="form-control" id="name_on_card" name="name_on_card" value=""  readonly>
                        @endif
                        </div>

                        <div class="form-group">
                            <label for="card-element">
                            Credit or debit card
                            </label>
                            <div id="card-element">
                            <!-- a Stripe Element will be inserted here. -->
                            </div>

                            <!-- Used to display form errors -->
                            <div id="card-errors" role="alert"></div>
                        </div>
                        <div class="spacer"></div>

                        <button type="submit" id="complete-order" class="button-primary full-width">Complétez la commande</button>



                    </form>
                        
                            <!-- <div class="mt-32">or</div>
                            <div class="mt-32">
                                <h2>Pay with PayPal</h2>
                                <form method="post" id="paypal-payment-form" action="{{ route('checkout.paypal') }}">
                                    @csrf
                        
                                    <section>
                                        <div class="bt-drop-in-wrapper">
                                            <div id="bt-dropin"></div>
                                        </div>
                                    </section>

                                    <input id="nonce" name="payment_method_nonce" type="hidden" />
                                    <button class="button-primary" type="submit"><span>Pay with PayPal</span></button>
                                </form>
                            </div> -->
                </div>



                <div class="checkout-table-container">
                    <h2>Votre commande</h2>

                    <div class="checkout-table">
                            @foreach (Cart::content() as $item)
                            <div class="checkout-table-row">
                                <div class="checkout-table-row-left">
                                    <img src=" {{asset('/storage/'.$item->model->image)}}" alt="item" class="checkout-table-img">
                                    <div class="checkout-item-details">
                                        <div class="checkout-table-item" style="  color: #41D1CC; margin-right: 100px;">{{ $item->model->title }}</div>
                                        <div class="checkout-table-description ">{{ $item->model->details }}</div>
                                        <div class="checkout-table-price">{{ $item->model->presentPrice() }}</div>
                                    </div>
                                </div> <!-- end checkout-table -->

                                <div class="checkout-table-row-right">
                                    <div class="checkout-table-quantity">{{ $item->qty }}</div>
                                </div>
                            </div> <!-- end checkout-table-row -->
                            @endforeach

                    

                    <div class="checkout-totals">
                        <div class="checkout-totals-left">
                            Subtotal <br>
                            Tax <br>
                            <span class="checkout-totals-total">Total</span>

                        </div>

                        <div class="checkout-totals-right">
                        {{ presentPrice(Cart::subtotal()) }}  <br>
                        {{ presentPrice(Cart::tax()) }} <br>
                            <span class="checkout-totals-total">{{ presentPrice(Cart::total()) }}</span>

                        </div>
                    </div> <!-- end checkout-totals -->

                </div>

            </div> <!-- end checkout-section -->
        </div>
    </div>

@endsection

@section('extra-js')
    <script src="https://js.braintreegateway.com/web/dropin/1.13.0/js/dropin.min.js"></script>

    <script>
        (function(){
            // Create a Stripe client.
            var stripe = Stripe('pk_test_51HNZ3EFQj6u8uDIdQDUFLVx47MhqDUHMremu2uxPIN4yN3pXypCR5oNSNjqLPVoI8KRwuWd4ZjXl7Ll2A0l32J0T00pxYiE0yu');
            

            // Create an instance of Elements.
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px','::placeholder': {
                color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
            };

            // Create an instance of the card Element.
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true
            });

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');
            // Handle real-time validation errors from the card Element.
            card.on('change', function(event) {
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
            document.getElementById('complete-order').disabled = true;
            var options = {
                name: document.getElementById('name_on_card').value,
                address_line1: document.getElementById('address').value,
                address_city: document.getElementById('city').value,
                address_state: document.getElementById('province').value,
                address_zip: document.getElementById('postalcode').value
              }

            stripe.createToken(card,options).then(function(result) {
                if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
                document.getElementById('complete-order').disabled = false;
                } else {
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
        })();
    </script>
@endsection