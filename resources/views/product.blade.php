<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/productPage.css') }}">
    <title>Laravel</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
@include("components.header")
<div class="product_MainController">
    <img src="{{$product->image}}" class="product_image" alt="">


    <div class="product_details">
        <h4 id="p-id" class="product_title" data-id={{$product->id}}>{{$product->name}}</h4>
        <h4 class="product_title">{{$product->price}}$</h4>
        <p class="product__description">
            {{$product->description}}
        </p>
        <button class="product__button">add to cart</button>
    </div>
    @include('components.suggestions')

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        console.log("hello")
        $.ajax({
            url: '{{ url('/update-view') }}',
            method: "post",
            data: {_token: '{{ csrf_token() }}', id: document.getElementById("p-id").dataset.id},
            success: function (response) {
                console.log("ok")
            }
        });


    </script>
</div>


</html>
@section('scripts')



@endsection
