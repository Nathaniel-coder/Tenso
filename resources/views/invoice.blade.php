<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IDEx | Your Shipping companion </title>

    <link rel="stylesheet" href="/css/app.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper" id="app">

        <div class="preloader flex-column justify-content-center align-items-center dark-mode">
            <img src="/img/tenso.drawio.png" class=" animation__wobble h2" height="150">
            <span class="text-center h3">Your first choice in Asia</span>
        </div>

        <nav class="main-header navbar navbar-expand navbar-dark">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href={{ url('home') }} class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href={{ url('contact') }} class="nav-link">Contact</a>
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

            <a href="/home" class="brand-link pt-2 pb-1">
                <img src="/img/tenso.drawio.png" class="brand-image img-circle elevation-2" alt=""
                    height="60">
                <p class="brand-text font-weight-light" style="padding-left: 3em;"><span class="red">Ten</span><span
                        class="blue">s</span><i class="blue fa fa-earth-asia"></i></p>
            </a>

            <div class="sidebar">

                <div class="user-panel my-4 pb-3 pt-1 d-flex">
                    <div class="image">
                        <img src="/img/profile/{{ Auth::user()->photo }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <span href="#" class="d-block text-capitalize text-light">{{ Auth::user()->name }}</span>
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
                            <a href="/home" class="nav-link">
                                <i class="nav-icon fa-solid fa-house-chimney"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>
                        @can('isAdministrator')
                            <li class="nav-item">
                                <a href="/dashboard" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </=>
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
                                        <a href="/staff" class="nav-link">
                                            <i class="fa fa-user-tie nav-icon"></i>
                                            <p>Staff</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/hr" class="nav-link">
                                            <i class="fa fa-id-badge nav-icon"></i>
                                            <p>Human Resource</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endcan

                        <li class="nav-item">
                            <a href="/contact" class="nav-link">
                                <i class="blue nav-icon fas fa-phone" id="contact"></i>
                                <p>
                                    Contact Us
                                </p>
                            </a>
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
                                    <a href={{ url('invoice') }} class="nav-link">
                                        <i class="fa-solid fa-file-invoice-dollar nav-icon"></i>
                                        <p>Invoice</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href={{ url('Receipts') }} class="nav-link">
                                        <i class="fa-solid fa-file-invoice-dollar nav-icon"></i>
                                        <p>Receipts and Invoices</p>
                                    </a>

                                </li>
                                @can('Administrator' || 'Staff')
                                    <li class="nav-item">
                                        <a href={{ url('invoice') }} class="nav-link">
                                            <i class="fa fa-id-badge nav-icon"></i>
                                            <p>Empty consignment</p>
                                        </a>
                                    </li>
                                @endcan
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
                            <a href="/profile" class="nav-link">
                                <i class="purple nav-icon fas fa-user-astronaut"></i>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>
                        @can('isAdministrator')
                            <li class="nav-item">
                                <a href="/developer" class="nav-link">
                                    <i class="yellow nav-icon fa fa-cogs"></i>
                                    <p>
                                        Developer
                                    </p>
                                </a>
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
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Receipts & Invoices</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="invoice p-3 mb-3">

                                <div class="row">
                                    <div class="col-12">
                                        <h4>
                                            Tens<i class="fas fa-earth-asia"></i>, Inc.
                                            <small class="float-right">Date: {{ date('d/m/Y', strtotime($data->created_at)) }}</small>
                                        </h4>
                                    </div>

                                </div>

                                <div class="row invoice-info">
                                    <div class="col-sm-4 invoice-col">
                                        From
                                        <address>
                                            <strong>Admin, Inc.</strong><br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            Phone: (60) 7-943-7871<br>
                                            Email: <a href="#" class="__cf_email__"
                                                data-cfemail="6801060e0728090405091b090d0d0c1b1c1d0c0107460b0705">[email&#160;protected]</a>
                                        </address>
                                    </div>

                                    <div class="col-sm-4 invoice-col">
                                        To
                                        <address>
                                            <strong>{{ Auth::user()->name }}</strong><br>
                                            {{ Auth::user()->address1 }}, {{ Auth::user()->address2 }}<br>
                                            {{ Auth::user()->postcode }} {{ Auth::user()->city }}, {{ Auth::user()->province }}, {{ Auth::user()->country }}<br>
                                            Phone: {{ Auth::user()->phone }}<br>
                                            Email: <a href="#" class="__cf_email__"
                                                data-cfemail="d7bdb8bfb9f9b3b8b297b2afb6baa7bbb2f9b4b8ba">[{{ Auth::user()->email }}]</a>
                                        </address>
                                    </div>

                                    <div class="col-sm-4 invoice-col">
                                        <b>Invoice #{{ date('mdy',strtotime($data->created_at)) }}{{ $data->id }}</b><br>
                                        <br>
                                        <b>Order ID:</b> {{ date('myd',strtotime($data->date)) }}{{ $data->id }}<br>
                                        <b>Payment Due:</b> {{ date('d/m/Y', strtotime($data->date)) }}<br>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-12 table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Qty</th>
                                                    <th>Product</th>
                                                    <th>Serial #</th>
                                                    <th>Description</th>
                                                    <th>Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Call of Duty</td>
                                                    <td>455-981-221</td>
                                                    <td>El snort testosterone trophy driving gloves handsome</td>
                                                    <td>$64.50</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Need for Speed IV</td>
                                                    <td>247-925-726</td>
                                                    <td>Wes Anderson umami biodiesel</td>
                                                    <td>$50.00</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Monsters DVD</td>
                                                    <td>735-845-642</td>
                                                    <td>Terry Richardson helvetica tousled street art master</td>
                                                    <td>$10.70</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Grown Ups Blue Ray</td>
                                                    <td>422-568-642</td>
                                                    <td>Tousled lomo letterpress</td>
                                                    <td>$25.99</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-6">
                                        <p class="lead">Payment Methods:</p>
                                        <img src="/img/credit/visa.png" alt="Visa">
                                        <img src="/img/credit/mastercard.png" alt="Mastercard">
                                    </div>

                                    <div class="col-6">
                                        <p class="lead">Amount Due 2/22/2014</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                    <th style="width:50%">Subtotal:</th>
                                                    <td>$250.30</td>
                                                </tr>
                                                <tr>
                                                    <th>Tax (9.3%)</th>
                                                    <td>$10.34</td>
                                                </tr>
                                                <tr>
                                                    <th>Shipping:</th>
                                                    <td>$5.80</td>
                                                </tr>
                                                <tr>
                                                    <th>Total:</th>
                                                    <td>$265.24</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>


                                <div class="row no-print">
                                    <div class="col-12">
                                        <a @click.prevent="printMe" rel="noopener" target="_blank"
                                            class="btn bg-blue"><i class="fas fa-print"></i> Print</a>
                                        {{-- <button type="button" class="btn btn-success float-right"><i
                                                class="far fa-credit-card"></i> Submit
                                            Payment
                                        </button>
                                        <button type="button" class="btn btn-primary float-right"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-download"></i> Generate PDF
                                        </button> --}}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <footer class="main-footer text-muted">
        <strong>Copyright &copy; 2014-2021 <a href="#">Ide<i class="orange fa fa-meteor"></i>l</a>.</strong>
        All rights reserved.
    </footer>
    </div>
</body>


</html>
