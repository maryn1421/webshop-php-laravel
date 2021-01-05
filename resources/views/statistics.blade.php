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


<div class="statistics__mainContainer">
    <table class="statistics__table">
        <th>name</th>
        <th>category</th>
        <th>price</th>
        <th>views</th>
        <th>quantity</th>
        <th>visit</th>
        <th>edit</th>
        @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->category_id}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->views}}</td>
                <td>{{$product->quantity}}</td>
                <td><a href="/product/{{$product->id}}">visit</a></td>
                <td><a href="/admin/product/{{$product->id}}">edit</a></td>
            </tr>

        @endforeach
    </table>
</div>



</body>
</html>
