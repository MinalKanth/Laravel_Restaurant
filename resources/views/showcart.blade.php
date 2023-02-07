<!DOCTYPE html>
<html lang="en">
    {{--  @php
    echo "<pre>";
        print_r($data->all());
        exit;
@endphp  --}}

<head>

    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <title>ViPrak Cafe - Restaurant HTML Template</title>
    <!--

TemplateMo 558 ViPrak Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ url('/') }}" class="logo">
                            <img src="assets/images/ViPrak.jpeg" width="80" height="80"
                                align="klassy cafe html template" style="padding-top: 10px;">
                            {{--  <h2 style="color: black">ViPrak Cafe Store</h2>  --}}
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ url('/.#top') }}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="{{ url('/.#about') }}">About</a></li>

                            <!--
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="{{ url('/.#menu') }}">Menu</a></li>
                            <li class="scroll-to-section"><a href="{{ url('/.#chefs') }}">Chefs</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="{{ url('/.#reservation') }}">Contact Us</a></li>
                            <li class="scroll-to-section">
                                @auth
                                    <a href="{{ url('/showcart', Auth::user()->id) }}">
                                        <span style="color:red">Cart
                                            [{{ $count }}]
                                        </span>
                                    </a>
                                @endauth

                                @guest
                                    <span style="color:green">Cart[0]</span>
                                @endguest
                                @if (Route::has('login'))

                                    @auth
                                        </a>
                                </li>
                                <li class="scroll-to-section">
                                    <x-app-layout>

                                    </x-app-layout>
                                </li>
                            @else
                                <li class="scroll-to-section"><a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                                @if (Route::has('register'))
                                    <li class="scroll-to-section"><a href="{{ route('register') }}"
                                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    </li>
                                @endif
                            @endauth

                            @endif
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>

                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <div id="top">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Food Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                <form method="post" action="{{ url('orderconfirm') }}" method="post">

                    @csrf

                    @foreach ($data as $cartItem)
                        <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                            <td><input type="text" name="foodname[]" value="{{ $cartItem->title }}"
                                    hidden="">{{ $cartItem->title }}</td>
                            <td><input type="text" name="price[]" value="{{ $cartItem->price }}"
                                    hidden="">{{ $cartItem->price }}</td>
                            <td><input type="text" name="quantity[]" value="{{ $cartItem->quantity }}"
                                    hidden="">{{ $cartItem->quantity }}</td>
                            <td><a href="{{ url('/remove', $cartItem->id) }}" class="btn btn-danger btn-sm">Remove</a>
                            </td>
                        </tr>
                    @endforeach
                    {{--  @foreach ($data2 as $cartid)
                        {{--  <tr style="postition: relative; top: -60px; right:-360px">  --}}
                        {{--  <tr style="position: relative; right: -1335px; top:-210px; ">
                            <td><a href="{{ url('/remove', $cartid->id) }}" class="btn btn-danger btn-sm">Remove</a>
                            </td>
                        </tr>  --}}
                    {{--  @endforeach    --}}
            </tbody>
        </table>
        <div align="center" style="padding: 10px;">
            <button type="button" class="btn btn-warning btn-sm" id="order" type="button">Order Now</button>
        </div>
        <div align="center" style="padding: 10px; display: none" id="appear">
            <div style="padding: 10px;">
                <label>Name</label>
                <input type="text" name="name" placeholder="Name">
            </div>
            <div style="padding: 10px;">
                <label>Phone</label>
                <input type="number" name="phone" placeholder="Phone">
            </div>
            <div style="padding: 10px;">
                <label>Address</label>
                <input type="text" name="address" placeholder="Address">
            </div>
            <div style="padding: 10px;">
                <input type="submit" value="Order Confirm" class="btn btn-success btn-sm" style="color:black">
                <button type="button" class="btn btn-danger btn-sm" id="close" style="color:black"
                    type="button">Close</button>
                </form>
            </div>

        </div>
        <!-- jQuery -->
        {{--  <script src="assets/js/jquery-2.1.0.min.js"></script>  --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- Plugins -->
        <script src="assets/js/owl-carousel.js"></script>
        <script src="assets/js/accordions.js"></script>
        <script src="assets/js/datepicker.js"></script>
        <script src="assets/js/scrollreveal.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/imgfix.min.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/lightbox.js"></script>
        <script src="assets/js/isotope.js"></script>

        <!-- Global Init -->
        <script src="assets/js/custom.js"></script>
        <script>
            $(function() {
                var selectedClass = "";
                $("p").click(function() {
                    selectedClass = $(this).attr("data-rel");
                    $("#portfolio").fadeTo(50, 0.1);
                    $("#portfolio div").not("." + selectedClass).fadeOut();
                    setTimeout(function() {
                        $("." + selectedClass).fadeIn();
                        $("#portfolio").fadeTo(50, 1);
                    }, 500);

                });
            });
        </script>
        <script type="text/javascript">
            $("#order").click(function() {
                $("#appear").show();
            });

            $("#close").click(function() {
                $("#appear").hide();
            });
        </script>
</body>

</html>
