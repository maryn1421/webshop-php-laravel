<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Main page</title>

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
@include('components.header')
<div class="category__filterContainer">
    <div class="filter__price"></div>
    <p>Value: <span id="demo"></span></p>
    <label for="myRange"></label><input type="range" min="1" max="500000" value="500000" class="slider" id="myRange">

    <div class="filter__price"></div>

</div>

<script>
    const slider = document.getElementById("myRange");
    const output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function () {
        output.innerHTML = this.value;
        let prices = document.querySelectorAll(".price-product");
        console.log(prices);
        prices.forEach(price  => {
            console.log(price.dataset.price)
            console.log(price.parentElement.parentElement);
            if (price.dataset.price > this.value) {
               price.parentElement.parentElement.style.display = "none";
            }
            else {
                price.parentElement.parentElement.style.display = "block";

            }
        })
    }



</script>


<div class="category__mainContainer" id="category__main">
    @foreach($products as $product)
        <a href="/product/{{$product->id}}">
            <div class="category__productContainer">
                <img class="product__image" src="{{$product->image}}" alt="">
                <h1 class="product__title">{{$product->name}}</h1>
                <p class="price-product"  data-price="{{$product->price}}">{{$product->price}} Forint</p>
                <a href="{{ url('add-to-cart/'.$product->id) }}" class="product__button">add to cart</a>
            </div>
        </a>
    @endforeach
</div>
</body>
</html>


