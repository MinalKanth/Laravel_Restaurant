<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.admincss')

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="responsive_slider/css/swiper-bundle.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="responsive_slider/css/style.css">

</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">


            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>

            </div>





            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="responsive_slider/images/profile1.jpg" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Users</h2>
                                <p class="card-text">In Total</p>
                                <h1 style="color:black">{{ $count_user }}</h1>
                                <a href="{{ url('users') }}"><button class="button">View Users</button></a>

                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="responsive_slider/images/profile2.jpg" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Food Menu</h2>
                                <p class="card-text">In Total</p>
                                <h1 style="color:black">{{ $count_food }}</h1>
                                <a href="{{ url('food') }}"><button class="button">View Food Menu</button></a>

                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="responsive_slider/images/profile3.jpg" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Chef</h2>
                                <p class="card-text">In Total</p>
                                <h1 style="color:black">{{ $count_chef }}</h1>
                                <a href="{{ url('chef') }}"><button class="button">View Chef</button></a>

                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="responsive_slider/images/profile4.jpg" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Reservation</h2>
                                <p class="card-text">In Total</p>
                                <h1 style="color:black">{{ $count_reservation }}</h1>
                                <a href="{{ url('reservation') }}"><button class="button">View Reservation</button></a>

                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="responsive_slider/images/profile5.jpg" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Order</h2>
                                <p class="card-text">In Total</p>
                                <h1 style="color:black">{{ $count_order }}</h1>
                                <a href="{{ url('order') }}"><button class="button">View Order</button></a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>






    <br>


    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card-hover-shadow-2x mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i
                            class="header-icon lnr-database icon-gradient bg-malibu-beach"></i>Orders List </div>
                </div>
                @foreach ($orders as $order)
                    <div class="scroll-area-lg">

                        <div style="position: static;" class="ps ps--active-y" ng-reflect-disabled="false">
                            <div class="ps-content">
                                <ul class="todo-list-wrapper list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="todo-indicator bg-primary"></div>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">

                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading"><b>Food
                                                            Name:-&emsp;</b>{{ $order->foodname }}</div>
                                                    <div class="widget-subheading">
                                                        <b>Address:-&emsp;</b>{{ $order->address }}
                                                    </div>
                                                    <div class="widget-heading"><b>User
                                                            Name:-&emsp;</b>{{ $order->name }}</div>
                                                    <div class="widget-subheading"><b>Contact
                                                            No:-&emsp;</b>{{ $order->phone }}</div>
                                                </div>
                                                <div class="widget-content-right widget-content-actions">
                                                    <button class="border-0 btn-transition btn btn-outline-success">
                                                        <fa-icon class="ng-fa-icon" ng-reflect-icon="[object Object]">
                                                            <svg role="img" aria-hidden="true" focusable="false"
                                                                data-prefix="fas" data-icon="check"
                                                                class="svg-inline--fa fa-check fa-w-16"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 512 512">
                                                                <path fill="currentColor"
                                                                    d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                                                </path>
                                                            </svg>
                                                        </fa-icon>
                                                    </button>
                                                </div>
                                                <div class="widget-content-right ml-3">
                                                    <div class="badge badge-pill badge-success">Latest
                                                        &emsp;{{ $order->updated_at }}
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </div>
    </main>


    @include('admin.adminscript')


</body>
<!-- Swiper JS -->
<script src="responsive_slider/js/swiper-bundle.min.js"></script>

<!-- JavaScript -->
<script src="responsive_slider/js/script.js"></script>

</html>
