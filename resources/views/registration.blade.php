<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration</title>

    <!--===============================================================================================-->


    <link rel="stylesheet" href="{{ asset('images/icons/favicon.ico/filename') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!--===============================================================================================-->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
</head>
<body>

<div class="container-contact100">
    <div class="wrap-contact100">
        <form action="#" method="POST" class="contact100-form validate-form"
              enctype="multipart/form-data">
            {{ csrf_field() }}
            <span class="contact100-form-title">
                    REGISTRATION
				</span>

            <div class="wrap-input100 validate-input" data-validate="Please enter the name of the product">
                <input class="input100" type="text" name="username" placeholder="username">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Please enter the name of the product">
                <input class="input100" type="text" name="name" placeholder="full name">
                <span class="focus-input100"></span>
            </div>


            <div class="wrap-input100 validate-input" data-validate="Please enter the price of the product">
                <input class="input100" type="email" name="email" placeholder="email">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Please enter the quantity of the product">
                <input class="input100" type="password" name="password1" placeholder="password">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Please enter the quantity of the product">
                <input class="input100" type="password" name="password2" placeholder="password">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Please enter the quantity of the product">
                <input class="input100" type="number" name="phone" placeholder="phone number">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Please enter the quantity of the product">
                <input class="input100" type="text" name="city" placeholder="city">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Please enter the quantity of the product">
                <input class="input100" type="text" name="state" placeholder="state">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Please enter the quantity of the product">
                <input class="input100" type="number" min="0" max="9999" name="zip" placeholder="zip code">
                <span class="focus-input100"></span>
            </div>



            <div class="wrap-input100 validate-input" data-validate="Please enter the name of the product">
                <input class="input100" type="text" name="address" placeholder="address (street name and house number)">
                <span class="focus-input100"></span>
            </div>


            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Register
						</span>
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
