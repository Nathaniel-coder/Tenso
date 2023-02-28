<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ideal Express | Your Shipping companion</title>
    <style>
        * {
            color: white
        }
    </style>
    {{-- <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet"> --}}
    <!-- style -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css"> --}}


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray terms">
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h1>IDEx</h1>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <section class="pt-8 pt-md-11">
                <div class="container container-secondary px-0 pt-5">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h2 class="display-6 mb-2">TERM OF USE</h2>
                            <p class="fs-lg  mb-6 mb-md-8 mb-4 text-justify">
                                We at Tenso,inc want to thank you for visiting us and using our services first and
                                foremost. To guarantee that both parties' legal rights are safeguarded, You agree to use
                                the logistics company's services only for lawful purposes and not to engage in any
                                activity that interferes with the company's operations or violates the rights of others.
                                Should you have any questions or issues concerning the subject
                                matter discussed above, please do not hesitate to contact us.
                            </p>
                        </div>
                    </div>
                    <div class="card card-body border-0 shadow bg-secondary">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="mb-2 mt-5">Updates of User Agreements</h3>
                                    <p class="mb-5 text-justify">
                                        We may alter agreements at any time by providing an updated version.
                                        they are posted. Users consent to the revised conditions by continuing to use
                                        our service. Depending on our judgment, we retain the right to periodically
                                        examine and alter any agreements, conditions, and promotions.
                                    </p>
                                    <h3 class="mb-2">Privacy Policy</h3>
                                    <p class="mb-5 text-justify">
                                        According to the Privacy Policy of our site, users agree that we may and can
                                        collect, hold and use users’ data solely for our purpose without
                                        transferring or publishing to third parties. We are responsible to protect and
                                        safeguard users’ data as our priority to maintain the service of our site.
                                    </p>
                                    <h3 class="mb-2">Content of Service</h3>
                                    <div class="d-flex">
                                        <p class="text-justify">We provide domestic and regional parcel
                                            storage and shipment. However, you are responsible for providing accurate and complete shipment information, including the sender and recipient's name and address.</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">
                                            Pick-up: We will pick up your parcel within the usual operating period after
                                            you place your pick-up order.
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">Storage of packages: Once we get your
                                            packages, we'll hold onto them for as long as it takes us to deliver them to
                                            the designated receiving location in excellent condition.</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">Delivery services: We will deliver within
                                            regular business hours, which are 9.00am – 6.00pm on weekdays and 9.00am –
                                            1.00pm on weekends (Saturday).</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">Parcel Information: At our branches'
                                            check-out counters, we will provide you your packages' weight or volume.</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p>Payment services: Users can pay shipping fees or other
                                            service costs through local bank transfer, internet payment gateway, or
                                            credit card.</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p>Assistance with customer service: Users can call our
                                            centralised customer service hotline.</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="mb-5">Parcel protection: If a parcel is lost through
                                            IdealEx delivery, users can make a claim for reimbursement.</p>
                                    </div>
                                    <h3 class="mb-2">Storage</h3>
                                    <div class="d-flex">
                                        <p class="text-justify">Users can keep their products in our
                                            warehouse using the storage service we offer. To ensure the security of your
                                            package, each of our warehouse is well-equipped with industry-standard
                                            storage safeguards such round-the-clock camera surveillance, fire protection
                                            measures, and anti-pest measures.</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">All parcels will be stored in good condition
                                            until we deliver them to the designated receiving address.</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">If the package cannot be delivered to the
                                            location listed on the Consignment Note for any reason or if the package
                                            is intended for self-collection by the consignee at an IdealEx station and
                                            the consignee fails to pick it up within 21 days,
                                            IdealEx has authorisation to dispose of the package and shall not be liable
                                            for any damages.</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify"><b>It is strictly forbidden for users to keep
                                                or deliver prohibited items</b><br>refer to <a
                                                href="#Prohibited">Prohibited Items</a></p>
                                    </div>
                                    <div class="d-flex mb-5">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="">The maximum reimbursement for a parcel is RM150 if it is
                                            determined that any missing or damaged packages were caused by IdealEx.</p>
                                    </div>
                                    <h3 class="mb-2">Calculation of Shipping cost</h3>
                                    <p class="mb-5 text-justify">
                                        Shipping prices are computed based on weight or volumetric weight, whichever is
                                        greater, and do not include insurance. Sendy may re-weigh and re-measure any
                                        cargo to validate this calculation. The following formula should be used to
                                        calculate the volumetric weight of any parcel: <span class="fw-bold">Volumetric
                                            weight = length x width x height (cm) / 6000 (Kgs)</span>
                                    </p>
                                    <h3 class="mb-2">Warranties</h3>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">Provide accurate information for the
                                            receiving address, declared value, weight and measurement of the
                                            consignment, and are responsible for false or inaccurate declarations.</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">If the declared weight and volumetric weight
                                            is incorrect, Sendy reserves the right to onhold the parcels until the
                                            variance of shipping fee is paid.</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">Compliance with Malaysian laws and ensure
                                            that all goods of consignment shall not contained any items from the
                                            prohibited list and are legal under any legislation.</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">The consignment is adequately prepared and
                                            packed to protect the enclosed goods and to ensure safe transportation</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">Whenever IdealEx undertakes or arranges transport,
                                            storage, or any other services, it is authorised to entrust the goods or
                                            arrangements to third parties, via any route and procedure, by any courier
                                            or successive, and in accordance with any handling, storage, and
                                            transportation methods as IdealEx deems appropriate.</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="mb-5 text-justify">We promise to deliver the items to the address
                                            listed on the consignment letter as the recipient. It is assumed that the
                                            delivery has been performed in line with the service agreement if we get a
                                            receipt or a signed certificate from someone at the designated location.</p>
                                    </div>
                                    <h3 class="mb-2" id="Prohibited">Prohibited Items</h3>
                                    <div class="d-flex">
                                        <p class="text-justify">The following items are strictly prohibited, and
                                            IdealEx has the
                                            right to transportation of any category of goods listed
                                            below. Any shipment containing such items may be subjected to the order
                                            being cancelled without notice. The consignee account will be deleted
                                            without notice.</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">Cash or cash cheques (in any currency), blank
                                            or endorsed cheques, negotiable instruments or securities (share
                                            certificates, bonds, etc.)</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">Jewelries, Counterfeit / pirated goods and
                                            materials, antique and other personal plesaure items(sex toys)</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">Livestock or plants</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify text-justify">Identification card / Driving
                                            licence / Birth cert / Passport / Debit card / Credit card</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        </span>
                                        <p class="text-justify">Hazardous, combustible or explosive
                                            materials</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">Items that could hide, harbour or breed
                                            pests and seeds</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="mb-5 text-justify">Any goods or materials that are prohibited by law,
                                            rule or regulation of any
                                            country</p>
                                    </div>
                                    <h3 class="mb-2">Compensation and claims</h3>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">
                                            Fragile Items：Fragile items can only be carried on a no compensation basis
                                            on any service without insurans policy.
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">Compensation for Lost Goods: Any claim of a lost
                                            shipment that is submitted more than 7 working days after the date on which
                                            its most recent tracking status was updated will not be taken into
                                            consideration. Following an inquiry, if it is determined that it was lost,
                                            compensation will be provided up to a maximum of RM250, with the stated
                                            worth of the products or three times the shipping cost, whichever is
                                            smaller, being awarded as the maximum.
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        </span>
                                        <p class="text-justify">Parcel content that is incomplete: If any of your
                                            consignment's packages are missing when you get it, please let us know
                                            within 48 hours of receiving it. You should also send us a photo of the
                                            packing and a copy of the package's re-weighing receipt, which you may
                                            attach. Entries received after the deadline will be rejected.</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        </span>
                                        <p class="text-justify">Address swapped or incorrectly delivered: If your
                                            package is swapped or is not delivered to the destination you specified,
                                            IdealEx will take the necessary remedial measures to retrieve it and return
                                            it to the proper address without additional fees.</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">Inaccurate information: The consignor is responsible
                                            for any costs or expenses incurred as a result of an erroneous declaration
                                            or information given, including those associated with returning, resending,
                                            destroying, or otherwise handling the consignment.</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="mb-5 text-justify">Delayed shipment：Compensation for
                                            shipment delay is not covered in the event of clearance inspection, airline
                                            delay, courier delay, bad weather, natural disaster or promotion during the
                                            peak season. If there is an issue of delayed shipment, we will inform the
                                            customers immediately.</p>
                                    </div>
                                    <h3 class="mb-2">Insurance</h3>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">
                                            Loss Insurance: Users may choose to add additional insurance coverage to
                                            their shipping orders, which we offer for all shipments. After an inquiry
                                            and verification, compensation will be given in accordance with the insured
                                            amount selected by the user and must be notified within 48 hours of the lost
                                            package. Claims that are past due will not be entertained.
                                        </p>
                                    </div>
                                    <h3 class="mb-2">IdealEx has the right to :</h3>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">
                                            Open the shipment and give it a thorough inspection, although this does not
                                            guarantee that it is transportation-ready. Consignment(s) may be examined
                                            and inspected at the demand of government authorities. IdealEx won't be held
                                            responsible for any delays, losses, damages, costs, or expenses associated
                                            with this.
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">
                                            Reject any shipment that has already been accepted for transport if, in
                                            IdealEx's judgement, there is a chance that the shipment's delivery or
                                            transportation might delay the delivery or shipment of another shipment, or
                                            could harm or endanger another shipment, equipment, or a person (s).
                                            For further information, users can refer to term 7. Prohibited list or get
                                            in touch with customer service.
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">
                                            Destroy or otherwise dispose of any products in the unclaimed consignment
                                            that have outlived their storage period; or if our company, in its sole
                                            discretion, believes that the goods may constitute a risk to other goods,
                                            property, life, or health, and transportation of the consignment is illegal.
                                            The consignor is responsible for paying the costs and expenditures related
                                            to returning, destroying, or handling the consignment in any other way.
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">
                                            Handling Method : IdealEx is free to handle the shipment in accordance with
                                            any storage management, carrier, routes, and methods.
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="text-justify">
                                            Review Feedback : We value each and every user's suggestions and opinions,
                                            and they remain our own. We reserve the right, at our sole discretion, to
                                            publish, delete, or store any comment.
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="mb-5 text-justify">
                                            Termination: The logistics company may terminate or suspend your account at any time for any reason.
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fa fa-check-circle orange fs-4 mx-3"></i>
                                        <p class="mb-5 text-justify">
                                            Governing Law: These terms and conditions shall be governed by and construed in accordance with the laws of the jurisdiction where the logistics company is located.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
