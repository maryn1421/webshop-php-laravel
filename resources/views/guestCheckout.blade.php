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

</head>
<body>
@include('components.header')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @if ($errors->has('email'))
        @endif
    </div>
@endif



<div class="registered__main">
    <div class="registered__orderMain">
        <h1>Shipping information</h1>

        <form action="{{url('guest-checkout')}}" method="POST" class="order-form">
            {{ csrf_field() }}

            <p>Name:</p>
            <input name="name" type="text">
            <p>email:</p>
            <input name="email" type="email" >
            <p>phone number:</p>
            <input name="phone" type="number" >
            <p>city:</p>
            <input name="city" type="text" >
            <p>state:</p>
            <input type="text" name="state" >
            <p>zip code:</p>
            <input type="number" name="zip">
            <p>address:</p>
            <input type="text" name="address">
            <p>confirm</p>
            <input required="required" type="checkbox" value="I agree">
            <br>
            <button type="submit"> confirm order</button>
        </form>

    </div>
</div>







</body>
</html>



