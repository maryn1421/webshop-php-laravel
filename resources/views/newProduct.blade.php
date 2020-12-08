<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add a new product</title>

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

<div class="container-contact100">
    <div class="wrap-contact100">
        <form action="{{ url('admin/new-product')}}" method="POST" class="contact100-form validate-form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <span class="contact100-form-title">
                    Add a new product
				</span>

            <div class="wrap-input100 validate-input" data-validate="Please enter the name of the product">
                <input class="input100" type="text" name="name" placeholder="product name">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Please enter the price of the product">
                <input class="input100" type="number" name="price" placeholder="Product price">
                <span class="focus-input100"></span>
            </div>



            <label for="name">Select or <a href="/admin/new-category">create</a> a category</label><select class="form-control" id="category" name="category" data-live-search="true" style="width:100%">
                @foreach ($categories as $category)
                    <option class="input100" value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <br>
            <br>

            <div class="wrap-input100 validate-input" data-validate="Please select the image of the product">
                <input  type="file" name="image" placeholder="image">
                <span class="focus-input100"></span>
            </div>


            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Send
						</span>
                </button>
            </div>
        </form>
    </div>
</div>

{{$categories}}

</body>
</html>
