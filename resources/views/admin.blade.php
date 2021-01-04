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

    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset('js/adminPage.js') }}"></script>

</head>
<body>
@include('components.header')
<div class="admin__buttonContainer">
    <a href="/admin/new-product" class="admin__newButton active">Add a new product</a>
    <a href="/admin/new-category" class="admin__newButton active">Add a new category</a>
</div>



<h4 class="admin__title">Categories:</h4> <br>
<div class="main__container">
    <div class="category__container">
        @foreach($categories as $category)
            <div class="category__header">
                <h1>{{ $category->name }}</h1>
                <a class="remove__button" href="{{ route('admin') }}"
                   onclick="event.preventDefault();
                       document.getElementById(
                       'delete-form-{{$category->id}}').submit();">
                    Delete
                </a>
                <form id="delete-form-{{$category->id}}"
                      + action="{{route('category.remove', $category->id)}}"
                      method="post">
                    @csrf @method('DELETE')
                </form>
            </div>

        @endforeach
    </div>
    <h4 class="admin__title">Products:</h4> <br>
    <div class="products__container">

        @foreach($products as $product)
                    <div class="product__container"  data-id="{{$product->id}}">
                        <img class="product__image" src="{{$product->image}}" alt="">
                        <h1 class="product__title">{{$product->name}}</h1>
                        <p>{{$product->price}}$</p>

                        <a class="remove__button" href="{{ route('admin') }}"
                           onclick="event.preventDefault();
                               document.getElementById(
                               'delete-form-{{$product->id}}').submit();">
                            Delete
                        </a>
                        <form id="delete-form-{{$product->id}}"
                              + action="{{route('product.remove', $product->id)}}"
                              method="post">
                            @csrf @method('DELETE')
                        </form>
                        <button href="/admin/product/{{$product->id}}" class="edit__button">edit product</button>
                    </div>
        @endforeach
    </div>
</div>

</body>
</html>
