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
            <div class="container">
                <div class="invoice card card-widget" style="background: white; color: black">
                    <div class="row">
                        <div class="col-7">
                            <img src="https://s3.eu-central-1.amazonaws.com/zl-clients-sharings/90Tech.png"
                                class="logo">
                        </div>
                        <div class="col-5">
                            <h1 class="document-type display-4">FACTURE</h1>
                            <p class="text-right"><strong>N°90T-17-01-0123</strong></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <p>
                                <strong>Tenso, inc</strong><br>
                                Address<br>
                                Address
                            </p>
                        </div>
                        <div class="col-2">
                            <br><br><br>
                            <p>
                                <strong>Customer</strong><br>
                                Réf. Client <em>C00022</em><br>
                                12 Rue de Verdun<br>
                                54250 JARNY
                            </p>
                        </div>
                    </div>
                    <br>
                    <br>
                    <h6>Payment Due Date (1er Novembre 2016 - 30 Novembre 2016)</h6>
                    <br>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Quantité</th>
                                <th>Unité</th>
                                <th>PU HT</th>
                                <th>TVA</th>
                                <th>Total HT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Audits et rapports mensuels</td>
                                <td>1</td>
                                <td>Jour</td>
                                <td class="text-right">500,00€</td>
                                <td>20%</td>
                                <td class="text-right">500,00€</td>
                            </tr>
                            <tr>
                                <td>Génération des rapports d'activité</td>
                                <td>4</td>
                                <td>Rapport</td>
                                <td class="text-right">800,00€</td>
                                <td>20%</td>
                                <td class="text-right">3 200,00€</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-8">
                        </div>
                        <div class="col-4">
                            <table class="table table-sm text-right">
                                <tr>
                                    <td><strong>Total HT</strong></td>
                                    <td class="text-right">3 700,00€</td>
                                </tr>
                                <tr>
                                    <td>TVA 20%</td>
                                    <td class="text-right">740,00€</td>
                                </tr>
                                <tr>
                                    <td><strong>Total TTC</strong></td>
                                    <td class="text-right">4 440,00€</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <p class="conditions">
                        En votre aimable règlement
                        <br>
                        Et avec nos remerciements.
                        <br><br>
                        Conditions de paiement : paiement à réception de facture, à 15 jours.
                        <br>
                        Aucun escompte consenti pour règlement anticipé.
                        <br>
                        Règlement par virement bancaire.
                        <br><br>
                        En cas de retard de paiement, indemnité forfaitaire pour frais de recouvrement : 40 euros (art.
                        L.4413 et L.4416 code du commerce).
                    </p>

                    <br>
                    <br>
                    <br>
                    <br>

                    <p class="bottom-page text-right">
                        90TECH SAS - N° SIRET 80897753200015 RCS METZ<br>
                        6B, Rue aux Saussaies des Dames - 57950 MONTIGNY-LES-METZ 03 55 80 42 62 - www.90tech.fr<br>
                        Code APE 6201Z - N° TVA Intracom. FR 77 808977532<br>
                        IBAN FR76 1470 7034 0031 4211 7882 825 - SWIFT CCBPFRPPMTZ
                    </p>
                </div>
            </div>
        </div>
    </div>

    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <span class="red">Ten</span><span class="blue">s</span><i
                class="blue fa fa-earth-asia"></i></strong>
        All rights reserved.
    </footer>
    </div>
</body>


</html>
