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



<div class="registered__main">
    <div class="registered__orderMain">
        <h1>Shipping information</h1>

        <form action="" class="order-form">
            <p>Name:</p>
            <input name="name" type="text" value="{{$user->name}}">
            <p>email:</p>
            <input name="email" type="email" value="{{$user->email}}">
            <p>phone number:</p>
            <input name="phone" type="number" value="{{$user->phone}}">
            <p>city:</p>
            <input name="city" type="text" value="{{$user->city}}">
            <p>state:</p>
            <input type="text" name="city" value="{{$user->state}}">
            <p>zip code:</p>
            <input type="number" name="zip" value="{{$user->zip}}">
            <p>address:</p>
            <input type="text" name="address" value="{{$user->address}}">
            <p>confirm</p>
            <input type="checkbox" value="I agree">
            <br>
            <button type="submit"> confirm order</button>
        </form>

    </div>
</div>







</body>
</html>


