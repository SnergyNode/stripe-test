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
                        <div class="box-title mt-3">
                            <h6>Payment Test</h6>
                        </div>
                        <div class="box-text">
                            <p>
                                Test Online Payment
                            </p>
                        </div>
                        <div class="">

                            <a href="{{ route('make.payment') }}" target="_blank" class="btn btn-outline-primary">Test Payment</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-12 text-center">
                    <div class="box">
                        <div class="">
                            <h6>Demo Card Details</h6>
                            <b class="text-success">Success</b>
                            <p class="text-muted">4242 4242 4242 4242</p>

                            <b class="text-success">Verify Success</b>
                            <p class="text-muted">4000 0000 0000 3220</p>

                            <b class="text-danger">Fail</b>
                            <p class="text-muted">4000 0000 0000 9995</p>

                            <small>Fill any other details with random details</small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </body>
</html>
