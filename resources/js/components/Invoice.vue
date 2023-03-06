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
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="invoice">
                            <div class="blue-tag"></div>
                            <div class="row">
                                <div class="col-7">

                                </div>
                                <div class="col-5">
                                    <h1 class="document-type display-4"><span class="red">Tens</span><i
                                            class="fa fa-earth-asia blue"></i></h1>
                                    <p class="text-right"><strong>Ref. Code <em>P{{ invoice.created_at | invoiceDate }}-{{
                                        invoice.id }}</em></strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-9">
                                    <br><br><br><br>
                                    <hr>
                                    <p>
                                        <strong>{{ invoice.name }}</strong><br>
                                        Réf. Code <em v-show="profile.type == 'Customer'">C{{ invoice.created_at |
                                            invoiceDate }}</em>
                                        <em v-show="profile.type == 'Administrator'">A{{ invoice.created_at | invoiceDate
                                        }}</em>
                                        <em v-show="profile.type == 'Driver'">D{{ invoice.created_at | invoiceDate }}</em>
                                        <em v-show="profile.type == 'Staff'">S{{ invoice.created_at | invoiceDate
                                        }}</em><br>
                                        {{ invoice.phone }}<br>
                                        {{ invoice.date | myDate }}
                                    </p>
                                </div>
                                <div class="col-3">
                                    <p class="text-right">
                                        <strong>Tens<i class="fa fa-earth-asia"></i>, inc</strong><br>
                                        Address<br>
                                        Address
                                    </p>
                                </div>
                            </div>
                            <br>
                            <br>
                            <h6>Payment Due Date : {{ invoice.date | date }}</h6>
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
                                For your kind settlement
                                <br>
                                And with our thanks.
                                <br><br>
                                Terms of payment: payment upon receipt of invoice, before {{ invoice.date | date }}.
                                <br>
                                No discount granted for early payment.
                                <br>
                                Payment by bank transfer or credit card.
                                <br><br>
                                In the event of late payment, fixed compensation for recovery costs: MYR40
                                (Act 1986s)
                            </p>

                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="blue-tag"></div>
                            <div class="col-md-12">
                                <div class="button">
                                    <a @click="printMe" rel="noopener" target="_blank" class="btn bg-blue"><i
                                            class="fas fa-print"></i> Print</a>
                                </div>
                            </div>
                            <p class="bottom-page text-right">
                                90TECH SAS - N° SIRET 80897753200015 RCS METZ<br>
                                    6B, Rue aux Saussaies des Dames - 57950 MONTIGNY-LES-METZ 03 55 80 42 62 -
                                    www.90tech.fr<br>
                                    Code APE 6201Z - N° TVA Intracom. FR 77 808977532<br>
                                    IBAN FR76 1470 7034 0031 4211 7882 825 - SWIFT CCBPFRPPMTZ
                            </p>
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
    props: ['profile', 'parentData'],
    data() {
        return {
            invoice: {},
            pickUp: false,
        }
    },
    mounted() {
        console.log('Component mounted.');
    },
    created() {
        this.generateInvoice();
        this.$root.$on('message-from-pickUp', (msg) => {
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
