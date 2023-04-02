<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tenso | Your Shipping companion </title>

    <link rel="stylesheet" href="/css/app.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper" id="app">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img src="/img/tenso.drawio.png" class=" animation__wobble h2" height="150">
            <span class="text-center h3">Your first choice in South-East Asia</span>
        </div>

        <nav class="main-header navbar navbar-expand navbar-dark">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <router-link to="/home" class="nav-link">Home</router-link>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <router-link to="/contact" class="nav-link">Contact</router-link>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <div class="input-group input-group-sm">
                            <input class="form-control-sm form-control-navbar" @keyup.enter="searchit" v-model="search"
                                type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" @click="searchit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <router-link to="/home" class="brand-link pt-2 pb-1">
                <img src="/img/tenso.drawio.png" class="brand-image img-circle elevation-2" alt=""
                    height="60">
                <p class="brand-text font-weight-light red" style="padding-left: 3em;">Tens<i class="blue fa fa-earth-asia"></i></p>
            </router-link>

            <div class="sidebar">

                <div class="user-panel my-4 pb-3 pt-1 d-flex">
                    <div class="image">
                        <img src="/img/profile/{{ Auth::user()->photo }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <span href="#" class="d-block text-capitalize">{{ Auth::user()->name }}</span>
                    </div>
                </div>

                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <router-link to="/home" class="nav-link">
                                <i class="nav-icon fa-solid fa-house-chimney"></i>
                                <p>
                                    Home
                                </p>
                            </router-link>
                        </li>
                        @can('isAdministrator')
                            <li class="nav-item">
                                <router-link to="/dashboard" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-users-gear nav-icon"></i>
                                    <p>
                                        Staff Management
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <router-link to="/staff" class="nav-link">
                                            <i class="fa fa-user-tie nav-icon"></i>
                                            <p>Staff</p>
                                        </router-link>
                                    </li>
                                    <li class="nav-item">
                                        <router-link to="/hr" class="nav-link">
                                            <i class="fa fa-id-badge nav-icon"></i>
                                            <p>Human Resource</p>
                                        </router-link>
                                    </li>
                                </ul>
                            </li>
                        @endcan

                        <li class="nav-item">
                            <router-link to="/contact" class="nav-link">
                                <i class="blue nav-icon fas fa-phone" id="contact"></i>
                                <p>
                                    Contact Us
                                </p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-users-gear nav-icon"></i>
                                <p>
                                    RIC Printable
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href={{ url('emptyInvoice') }} class="nav-link">
                                        <i class="fa-solid fa-file-invoice nav-icon"></i>
                                        <p>Invoice</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href={{ url('receipt&Invoice') }} class="nav-link">
                                        <i class="fa-solid fa-clock nav-icon"></i>
                                        <p>Order History</p>
                                    </a>

                                </li>
                                @cannot('isCustomer')
                                    <li class="nav-item">
                                        <a href={{ url('invoice') }} class="nav-link">
                                            <i class="fa-solid fa-file-contract nav-icon"></i>
                                            <p>Empty consignment</p>
                                        </a>
                                    </li>
                                @endcannot
                            </ul>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    UI Elements
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="pages/UI/buttons.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Buttons</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/sliders.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sliders</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/modals.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Modals & Alerts</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/navbar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Navbar & Tabs</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/timeline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Timeline</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/ribbons.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ribbons</p>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="nav-item">
                            <router-link to="/profile" class="nav-link">
                                <i class="purple nav-icon fas fa-user-astronaut"></i>
                                <p>
                                    Profile
                                </p>
                            </router-link>
                        </li>
                        @can('isAdministrator')
                            <li class="nav-item">
                                <router-link to="/developer" class="nav-link">
                                    <i class="yellow nav-icon fa fa-cogs"></i>
                                    <p>
                                        Developer
                                    </p>
                                </router-link>
                            </li>
                        @endcan
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="red nav-icon fas fa-power-off"></i>
                                <p>Logout</p>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>

            </div>

        </aside>

        <div class="content-wrapper">
            <router-view :profile="{{ Auth::user() }}"></router-view>
            <vue-progress-bar></vue-progress-bar>
        </div>
    </div>

    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <span class="red">Ten</span><span
            class="blue">s</span><i class="blue fa fa-earth-asia"></i></strong>
        All rights reserved.
    </footer>
    </div>
</body>


</html>
