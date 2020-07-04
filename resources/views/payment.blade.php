<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PayTest</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <style>
            @import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');

            body{
                background: #f2f2f2;
                font-family: 'Poppins', sans-serif;
            }

            h3{
                font-family: 'Poppins', sans-serif;
            }

            .social-box .box{
                background: #FFF;
                border-radius: 10px;
                padding: 40px 10px;
                margin: 20px 0px;
                /*cursor: pointer;*/
                transition: all 0.5s ease-out;
            }

            .social-box .box:hover{
                box-shadow: 0 0 6px #4183D7;
            }

            .social-box .box .box-text{
                margin:20px 0px;
                font-size: 15px;
                line-height: 30px;
            }

            .social-box .box .box-btn a{
                text-decoration: none;
                color: #4183D7;
                font-size: 16px;
            }

            .fa{
                color:#4183D7;
            }
        </style>


        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
    <div class="social-box">
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 200px">

                <div class="col-lg-4 col-xs-12 text-center">
                    <div class="box">
                        <i class="fa fa-credit-card fa-3x" aria-hidden="true"></i>
                        <div class="box-title">
                            <h3>Pay Now</h3>
                        </div>
                        <div class="box-text">
                            <h3>
                                $10
                            </h3>
                        </div>
                        <div class="">

                            <button class="btn btn-outline-primary" id="checkout-button" data-secret="{{ $session->id }}">Checkout</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('pk_test_51H1Be1ASzqzDWCz46IoVz5p5NngPia4lldTGjmIBg9idMC9PUMXvj1bZgNY3paCJaSjERMCthFdEsNXW0lMCiCeL00GcGy0rwu');
        var checkoutButton = document.getElementById('checkout-button');

        checkoutButton.addEventListener('click', function() {
            stripe.redirectToCheckout({
                // Make the id field from the Checkout Session creation API response
                // available to this file, so you can provide it as argument here
                // instead of the {CHECKOUT_SESSION_ID} placeholder.
                sessionId: '{{ $session->id }}'
            }).then(function (result) {
                // If `redirectToCheckout` fails due to a browser or network
                // error, display the localized error message to your customer
                // using `result.error.message`.
            });
        });
    </script>

    </body>
</html>
