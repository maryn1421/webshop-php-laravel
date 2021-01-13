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
    <br>
    <br>
    <div class="checkout__chooseContainer">


        @if(session('user') != null)
            <a href="/#">next</a>

        @else
            <a href="/login">continue as registered user</a><br>
            <a href="" class="guest__checkOut">continue as guest</a>
            <br>
        @endif
    </div>
    <div class="table__container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
            </thead>
            <tbody>

            <?php $total = 0 ?>
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)

                    <?php $total += $details['price'] * $details['quantity'];
                    ?>



                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs"><img src="{{$details['photo']}}" width="100"
                                                                     height="100"
                                                                     class="img-responsive" alt="photo"/></div>
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">{{ $details['price'] }} Ft</td>
                        <td data-th="Quantity">
                            <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity"/>
                        </td>
                        <td data-th="Subtotal" class="text-center">{{ $details['price'] * $details['quantity'] }}Ft</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @endif


    </div>
    <div class="checkOut__backButtonContainer">
        <a class="back" href="/cart">back to cart</a>

    </div>


</div>



</body>
</html>


