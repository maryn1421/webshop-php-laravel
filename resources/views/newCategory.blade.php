<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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
        <form action="{{ url('admin/new-category')}}" method="POST" class="contact100-form validate-form">
            {{ csrf_field() }}
            <span class="contact100-form-title">
                    Add a new category
				</span>

            <div class="wrap-input100 validate-input" data-validate="Please enter the name of the category">
                <input class="input100" type="text" name="name" placeholder="category name">
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Add
						</span>
                </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>

