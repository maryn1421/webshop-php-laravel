<style>
    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="topnav">
    <div class="header__icons">
        <a id="home" class="active" href="/">Home</a>
        <a id="for-sale" href="#for sale">For sale</a>
        <a id="admin" href="/admin">Admin</a>
        <a id="about" href="#about">About</a>
        <div class="cart-container" id="cart-container">
            <a id="cart-size" href="/cart"><i class="fa fa-shopping-cart cart-icon"></i><span id="cart-size-2" class="badge" >{{ session('cart')!=null?count(session('cart')):0 }}</span></a>
        </div> <!--end shopping-cart -->

    </div>

        <div class="search-container">
            <form action="">
                @csrf
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

    </div>

