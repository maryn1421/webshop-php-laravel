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
    <script type="text/javascript" src="{{ asset('js/mainPage.js') }}"></script>

</head>
<body>
@include('components.header')

<div class="main__container">
    <div class="wrap-contact100">
        @foreach($categories as $category)
            <div class="category__header">
                <h1>{{ $category->name }}</h1>
            </div>
            <div class="products__container">
                @foreach($products as $product)
                    @if($product->category_id == $category->id)
                        <a href="/product/{{$product->id}}">
                        <div class="product__container">
                            <img class="product__image" src="{{$product->image}}" alt="">
                            <h1>{{$product->name}}</h1>
                            <p>{{$product->price}}$</p>
                            <a href="{{ url('add-to-cart/'.$product->id) }}" class="product__button">add to cart</a>
                        </div>
                        </a>
                    @endif
                @endforeach
            </div>
        @endforeach
    </div>
</div>

</body>
</html>

