<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tenso | Your Shipping companion</title>

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
                    <a href="/home" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/contact" class="nav-link">Contact</a>
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
                                </a>
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
                                @cannot('isCustomer')
                                    <li class="nav-item">
                                        <a href={{ url('invoice') }} class="nav-link">
                                            <i class="fa-solid fa-file-invoice-dollar nav-icon"></i>
                                            <p>Invoice</p>
                                        </a>
                                    </li>
                                @endcannot
                                <li class="nav-item">
                                    <a href={{ url('Receipts') }} class="nav-link">
                                        <i class="fa-solid fa-file-invoice-dollar nav-icon"></i>
                                        <p>Receipts and Invoices</p>
                                    </a>

                                </li>
                                @can('isAdministrator' || 'isStaff')
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
                            <h1>Receipts and Invoices</h1>
                        </div>
                    </div>
                </div>
            </section>

            <div class="row d-flex justify-content-around" style="margin-left: 0; margin-right: 0">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link" href="#pickUp" data-toggle="tab">Pick Up</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#dropOff" data-toggle="tab">Drop Off</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="dropOff">
                                    <div class="post">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    Drop Off
                                                </h3>
                                            </div>

                                            <div class="card-body">
                                                <table class="table table-hover text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Tracking Id</th>
                                                            <th>Date</th>
                                                            <th>Phone</th>
                                                            <th>Receiver</th>
                                                            <th>
                                                                Destined Address
                                                            </th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($dropOff as $dropOff)
                                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                                <td>
                                                                    {{ date('mdy', strtotime($dropOff->created_at)) }}{{ $dropOff->id }}
                                                                </td>
                                                                <td>
                                                                    {{ $dropOff->date }}
                                                                </td>
                                                                @can(!'isCustomer')
                                                                    <td>
                                                                        {{ $dropOff->name }}
                                                                    </td>
                                                                @endcan
                                                                <td>
                                                                    {{ $dropOff->phone }}
                                                                </td>
                                                                <td>
                                                                    {{ $dropOff->toname }}
                                                                </td>
                                                                @can('isCustomer')
                                                                    <td toggle="tootip"
                                                                        title="{{ $dropOff->toaddress1 .
                                                                            ', ' .
                                                                            $dropOff->toaddress2 .
                                                                            ', ' .
                                                                            $dropOff->topostcode .
                                                                            ' ' .
                                                                            $dropOff->tocity .
                                                                            ', ' .
                                                                            $dropOff->toprovince .
                                                                            ', ' .
                                                                            $dropOff->tocountry }}">
                                                                        {{ Str::limit(
                                                                            $dropOff->toaddress1 .
                                                                                ', ' .
                                                                                $dropOff->toaddress2 .
                                                                                ', ' .
                                                                                $dropOff->topostcode .
                                                                                ' ' .
                                                                                $dropOff->tocity .
                                                                                ', ' .
                                                                                $dropOff->toprovince .
                                                                                ', ' .
                                                                                $dropOff->tocountry,
                                                                            70,
                                                                        ) }}
                                                                    </td>
                                                                @endcan
                                                                @can(!'isCustomer')
                                                                    <td toggle="tootip"
                                                                        title="{{ $dropOff->toaddress1 .
                                                                            ', ' .
                                                                            $dropOff->toaddress2 .
                                                                            ', ' .
                                                                            $dropOff->topostcode .
                                                                            ' ' .
                                                                            $dropOff->tocity .
                                                                            ', ' .
                                                                            $dropOff->toprovince .
                                                                            ', ' .
                                                                            $dropOff->tocountry }}">
                                                                        {{ Str::limit(
                                                                            $dropOff->toaddress1 .
                                                                                ', ' .
                                                                                $dropOff->toaddress2 .
                                                                                ', ' .
                                                                                $dropOff->topostcode .
                                                                                ' ' .
                                                                                $dropOff->tocity .
                                                                                ', ' .
                                                                                $dropOff->toprovince .
                                                                                ', ' .
                                                                                $dropOff->tocountry,
                                                                            50,
                                                                        ) }}
                                                                    </td>
                                                                @endcan
                                                                <td>
                                                                    {{ $dropOff->status ? $dropOff->status : 'Unpaid' }}
                                                                </td>
                                                                <td>
                                                                    <a class="btn bg-orange" toggle="tooltip"
                                                                        title="Generate Invoice"
                                                                        href="invoiceDropOff/{{ $dropOff->id }}">
                                                                        <i class="fa-solid fa-file-lines white"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            @can(!'isCustomer')
                                                                <tr class="expandable-body d-none">
                                                                    <td>
                                                                        <div class="ml-2">
                                                                            <strong>Picture :</strong><br>
                                                                            <img src="" alt="">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="ml-2">
                                                                            <strong>Vehicle :</strong><br>
                                                                            {{ $dropOff->vehicleId ? $dropOff->vehicleId : 'unselected' }}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="ml-2">
                                                                            <strong>Driver :</strong><br>
                                                                            {{ $dropOff->driverId ? $dropOff->driverId : 'unselected' }}
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="ml-2">
                                                                            <strong>Branch :</strong><br>
                                                                            {{ $dropOff->branch ? $dropOff->branch : 'unselected' }}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endcan
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="pickUp">
                                    <div class="post">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Pick Up</h3>
                                                <div class="card-tools">
                                                    <div class="input-group input-group-sm" style="width: 150px">
                                                        <input type="text" name="table_search"
                                                            class="form-control float-right" placeholder="Search" />
                                                        <div class="input-group-append">
                                                            <button type="submit" class="btn btn-default">
                                                                <i class="fas fa-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <table class="table table-hover text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Tracking Id</th>
                                                            <th>Date</th>
                                                            <th>Sender</th>
                                                            <th>Receiver</th>
                                                            <th>Origin</th>
                                                            <th>Destined</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($pickUp as $pickUp)
                                                            <tr class="pointer">
                                                                <td>{{ date('mdy', strtotime($pickUp->created_at)) }}{{ $pickUp->id }}
                                                                </td>
                                                                <td>{{ $pickUp->date }}</td>
                                                                <td>
                                                                    {{ $pickUp->name }}
                                                                </td>
                                                                <td>
                                                                    {{ $pickUp->toname }}
                                                                </td>
                                                                <td toggle="tootip"
                                                                    title="{{ $pickUp->address1 .
                                                                        ', ' .
                                                                        $pickUp->address2 .
                                                                        ', ' .
                                                                        $pickUp->postcode .
                                                                        ' ' .
                                                                        $pickUp->city .
                                                                        ', ' .
                                                                        $pickUp->province .
                                                                        ', ' .
                                                                        $pickUp->country }}">
                                                                    {{ Str::limit($pickUp->address1 . ', ' . $pickUp->address2 . ', ' . $pickUp->postcode . ', ' . $pickUp->city . ', ' . $pickUp->province . ', ' . $pickUp->country, 30) }}
                                                                </td>
                                                                <td toggle="tootip"
                                                                    title="{{ $pickUp->toaddress1 .
                                                                        ', ' .
                                                                        $pickUp->toaddress2 .
                                                                        ', ' .
                                                                        $pickUp->topostcode .
                                                                        ' ' .
                                                                        $pickUp->tocity .
                                                                        ', ' .
                                                                        $pickUp->toprovince .
                                                                        ', ' .
                                                                        $pickUp->tocountry }}">

                                                                    {{ Str::limit($pickUp->toaddress1 . ', ' . $pickUp->toaddress2 . ', ' . $pickUp->topostcode . ', ' . $pickUp->tocity . ', ' . $pickUp->toprovince . ', ' . $pickUp->tocountry, 30) }}
                                                                </td>
                                                                <td>
                                                                    <a class="btn bg-orange" toggle="tooltip"
                                                                        title="Generate Invoice"
                                                                        href="invoicePickUP/{{ $pickUp->id }}">
                                                                        <i class="fa-solid fa-file-lines white"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="#" class="white">Ide<i
                    class="orange fa fa-meteor"></i>l</a>.</strong>
        All rights reserved.
    </footer>
    </div>
</body>


</html>
