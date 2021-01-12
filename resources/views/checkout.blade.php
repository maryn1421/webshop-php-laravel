<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Main page</title>

    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <!--===============================================================================================-->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset('js/adminPage.js') }}"></script>

</head>
<body>
@include('components.header')
<div class="checkout__mainContainer">

</div>




</body>
</html>


