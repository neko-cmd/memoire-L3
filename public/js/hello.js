
(function(){

    // PayPal Stuff
    var form = document.querySelector('#paypal-payment-form');
    var client_token = "{{ $paypalToken }}";

    braintree.dropin.create({
    authorization: client_token,
    selector: '#bt-dropin',
    paypal: {
        flow: 'vault'
    }
    }, function (createErr, instance) {
    if (createErr) {
        console.log('Create Error', createErr);
        return;
    }

    // remove credit card option
    var elem = document.querySelector('.braintree-option__card');
    elem.parentNode.removeChild(elem);

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        instance.requestPaymentMethod(function (err, payload) {
        if (err) {
            console.log('Request Payment Method Error', err);
            return;
        }

        // Add the nonce to the form and submit
        document.querySelector('#nonce').value = payload.nonce;
        form.submit();
        });
    });
    });

})();
                            