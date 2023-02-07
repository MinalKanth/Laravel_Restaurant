<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="{{ url('redirects') }}"><h1 style="color:white">ViPrak</h1>
                {{--  <img src="admin/assets/images/logo.svg" alt="logo" />  --}}
                </a>
                <style>
                    a:link {
                        text-decoration: none;
                      }

                      a:visited {
                        text-decoration: none;
                        color
                      }

                      a:hover {
                        text-decoration: none;
                        color: #2ecc71
                      }

                      a:active {
                        text-decoration: none;
                      }
                </style>
        </div>

        <ul class="nav">

            <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/users') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-speedometer"></i>
                    </span>
                    <span class="menu-title">Users</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/food') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Food Menu</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/chef') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-table-large"></i>
                    </span>
                    <span class="menu-title">Chefs</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/reservation') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-chart-bar"></i>
                    </span>
                    <span class="menu-title">Reservations</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/order') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-chart-bar"></i>
                    </span>
                    <span class="menu-title">Orders</span>
                </a>
            </li>

        </ul>
    </nav>

</div>
