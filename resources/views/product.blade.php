<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/productPage.css') }}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
@include("components.header")
<div class="product_MainController">
    <img src="{{$product->image}}" class="product_image" alt="">


    <div class="product_details">
        <h4 class="product_title">{{$product->name}}</h4>
        <h4 class="product_title">{{$product->price}}$</h4>
        <button class="product__button">add to cart</button>
    </div>
    {{$suggestions}}

    @include('components.suggestions')


</div>


</html>
