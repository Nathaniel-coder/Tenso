<template>
    <div>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Invoice</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Invoice</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content" style="@media print{color: black}">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="invoice p-3 mb-3">

                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        Tens<i class="fa fa-earth-asia"></i>, Inc.
                                        <small class="float-right">Date: {{  invoice.created_at | Date }}</small>
                                    </h4>
                                </div>

                            </div>

                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    From
                                    <address>
                                        <strong>Tens<i class="fa fa-earth-asia"></i>, Inc.</strong><br>
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                        Phone: (804) 123-5432<br>
                                        Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="6801060e0728090405091b090d0d0c1b1c1d0c0107460b0705">[email&#160;protected]</a>
                                    </address>
                                </div>

                                <div class="col-sm-4 invoice-col">
                                    To <br>
                                    <strong> {{ invoice.name }} </strong><br>
                                    Phone: {{ invoice.phone }}<br>
                                    Email: <a href="#" class="__cf_email__"
                                        data-cfemail="d7bdb8bfb9f9b3b8b297b2afb6baa7bbb2f9b4b8ba" mailto=pro>{{ profile.email }}</a>
                                </div>

                                <div class="col-sm-4 invoice-col">
                                    <b>Invoice #{{ invoice.created_at | invoiceDate }}{{ invoice.id }}</b><br>
                                    <br>
                                    <b>Order ID:</b> {{ invoice.created_at | invoiceDate }}{{ invoice.id }}<br>
                                    <b>Payment Due:</b> {{ invoice.created_at | invoiceDate }}<br>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Qty</th>
                                                <th>Category</th>
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
                                    <img src="/img/credit/american-express.png" alt="American Express">
                                    <!-- <img src="/img/credit/paypal2.png" alt="Paypal"> -->
                                    <p class="well well-sm shadow-none" style="margin-top: 10px;">
                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya
                                        handango imeem
                                        plugg
                                        dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                    </p>
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
                                    <a @click.prevent="printMe" rel="noopener" target="_blank" class="btn bg-blue"><i
                                            class="fas fa-print"></i> Print</a>
                                    <button type="button" class="btn btn-success float-right"><i
                                            class="far fa-credit-card"></i> Submit
                                        Payment
                                    </button>
                                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                        <i class="fas fa-download"></i> Generate PDF
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>
</template>

<script>
import Axios from 'axios';
export default {
    props:['profile', 'parentData'],
    data() {
        return {
            invoice: {},
            pickUp: false,
        }
    },
    mounted() {
        console.log('Component mounted.');
    },
    created(){
        this.generateInvoice();
        this.$root.$on('message-from-pickUp', (msg)=>{
            this.pickUp = msg;
        })
    },
    methods: {
        printMe() {
            window.print();
        },
        generateInvoice() {
            Axios.get('api/dropOff/' + this.profile.phone).then(({ data }) => this.invoice = data);
        }
    }
}
</script>
