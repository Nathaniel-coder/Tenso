<template>
    <div>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Home</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title" v-show="profile.type == 'Administrator'">Counter</h3>
                            <h3 class="card-title" v-show="profile.type == 'Customer'">View Shipment</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool nav-icon" data-card-widget="collapse"
                                    title="Collapse">
                                    <i class="fas fa-angle-down white"></i>
                                </button>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex justify-content-around">
                                <div class="col-lg-6 col-md-4 pointer boxhover text-center" @click="delivery" v-show="profile.type == 'Administrator'">
                                    <i class="fa fa-box icon-size orange"></i>
                                    <p>Delivery</p>
                                </div>
                                <div class="col-lg-6 col-md-4 pointer boxhover text-center" @click="viewShipment" v-show="profile.type == 'Administrator' || profile.type == 'Customer'">
                                    <i class="fa fa-search icon-size blue"></i><br>
                                    <p>View Shipment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title" v-show="profile.type != 'Customer'">Operation<span class="red pl-1">Ten</span><span
                                    class="blue">s</span><i class="blue fa fa-earth-asia"></i></h3>
                            <h3 class="card-title" v-show="profile.type == 'Customer'">Modes</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool nav-icon" data-card-widget="collapse"
                                    title="Collapse">
                                    <i class="fas fa-angle-down white"></i>
                                </button>

                            </div>
                        </div>
                        <div class="card-body">
                            <div v-show="profile.type != 'Customer' && profile.type != 'customer'" class="row mx-2">
                                <div class="col-lg-3 col-md-4 pointer boxhover text-center" @click="newParcel">
                                    <i class="fa fa-box icon-size teal z-n1 px-3"></i>
                                    <i class="fa-regular fa-circle-check icon-size-sm z-1"></i>
                                    <p class="ml-4">New Parcel</p>
                                </div>
                                <div class="col-lg-3 col-md-4 pointer boxhover text-center" @click="loadTruck">
                                    <i class="fa fa-truck-ramp-box icon-size blue"></i>
                                    <p class="ml-4">Load Truck</p>
                                </div>
                                <div class="col-lg-3 col-md-4 pointer boxhover text-center" @click="unloadParcels">
                                    <i class="fa fa-dolly icon-size cyan"></i>
                                    <p class="ml-4">Unload Parcels</p>
                                </div>
                                <div class="col-lg-3 col-md-4 pointer boxhover text-center" @click="branchArrivals">
                                    <i class="fa-solid fa-building-circle-check icon-size blue"></i>
                                    <p>Branch Arrivals</p>
                                </div>
                            </div>
                            <div v-show="profile.type == 'Customer' || profile.type == 'customer'" class="row mx-2">
                                <div class="col-lg-6 col-md-4 pointer boxhover text-center" @click="newParcel">
                                    <i class="fa fa-box icon-size teal z-n1 px-3"></i>
                                    <i class="fa fa-circle-plus icon-size-sm z-1"></i>
                                    <p class="pl-4">Drop Off</p>
                                </div>
                                <div class="col-lg-6 col-md-4 pointer boxhover text-center" @click="newParcel2">
                                    <i class="fa fa-truck-ramp-box icon-size blue"></i>
                                    <p class="pl-3 pt-1">Pick Up</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" v-show="profile.type == 'Administrator'">
                        <div class="card-header">
                            <h3 class="card-title d-flex">Operation Ide<i class="fa-solid fa-meteor orange"></i>l
                                </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool nav-icon" data-card-widget="collapse"
                                    title="Collapse">
                                    <i class="fas fa-angle-down white"></i>
                                </button>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex justify-content-between">
                                <div class="col-lg-4 col-md-4 pointer boxhover text-center" @click="transfer">
                                    <i class="fa fa-box icon-size red"></i>
                                    <i class="fa fa-right-left icon-size mx-3"></i>
                                    <i class="fa fa-box icon-size blue"></i>
                                    <p>Transfer Shipment</p>
                                </div>
                                <div class="col-lg-4 col-md-4 pointer boxhover text-center" @click="receive">
                                    <i class="fa fa-people-carry-box icon-size blue"></i>
                                    <p>Receive Shipment</p>
                                </div>
                                <div class="col-lg-4 col-md-4 pointer boxhover text-center" @click="open">
                                    <i class="fa fa-box-open icon-size brown"></i>
                                    <p>Open Bag</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" v-show="profile.type == 'Administrator'">
                        <div class="card-header">
                            <h3 class="card-title">Exception</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool nav-icon" data-card-widget="collapse"
                                    title="Collapse">
                                    <i class="fas fa-angle-down white"></i>
                                </button>

                            </div>
                        </div>
                        <div class="card-body" v-show="profile.type == 'Administrator'">
                            <div class="row d-flex justify-content-between">
                                <div class="col-lg-3 col-md-4 pointer boxhover text-center" @click="damaged">
                                    <i class="fa fa-tornado icon-size z-n1 red position-absolute"></i>
                                    <i class="fa fa-box icon-size yellow z-1 px-3"></i>
                                    <i class="fa fa-fire icon-size z-2 red"></i>
                                    <p class="ml-3">Disaster <br/>(Special Case)</p>
                                </div>
                                <div class="col-lg-3 col-md-4 pointer boxhover text-center" @click="broken">
                                    <i class="fa fa-burst icon-size z-1 red position-absolute"></i>
                                    <i class="fa fa-box icon-size yellow z-n1 pl-4 pr-5"></i>
                                    <p>Parcel Broken</p>
                                </div>
                                <div class="col-lg-3 col-md-4 pointer boxhover text-center" @click="penalties">
                                    <i class="fa fa-box icon-size yellow z-n1 px-3"></i>
                                    <i class="fa fa-triangle-exclamation icon-size z-1 red fa-bounce"></i>
                                    <p>Penalties</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-show="profile.type == 'Customer'" class="col-lg-5">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Shipment Status</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool nav-icon" data-card-widget="collapse"
                                    title="Collapse">
                                    <i class="fas fa-angle-down"></i>
                                </button>

                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table text-nowrap pointer">
                                <tbody>
                                    <tr>
                                        <td>Pending</td>
                                        <td>1<i class="icon-size-sm fa fa-truck fa-bounce-long mx-2"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Scheduled</td>
                                        <td>2<i class="icon-size-sm fa-regular fa-calendar-check teal mx-2"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Out For Delivery</td>
                                        <td>3<i class="icon-size-sm fa fa-truck-fast fa-beat-fade yellow mx-2"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Delivered</td>
                                        <td>9<i class="icon-size-sm fa fa-truck-fast blue mx-2"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Exception</td>
                                        <td>1<i class="icon-size-sm fa fa-circle-exclamation fa-shake red mx-2"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div v-show="profile.type != 'Customer'" class="col-lg-5">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Shipment Status</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool nav-icon" data-card-widget="collapse"
                                    title="Collapse">
                                    <i class="fas fa-angle-down"></i>
                                </button>

                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table text-nowrap pointer">
                                <tbody>
                                    <tr>
                                        <td>Pending</td>
                                        <td>1<i class="icon-size-sm fa fa-truck fa-bounce-long mx-2"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Scheduled</td>
                                        <td>2<i class="icon-size-sm fa-regular fa-calendar-check teal mx-2"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Out For Delivery</td>
                                        <td>3<i class="icon-size-sm fa fa-truck-fast fa-beat-fade yellow mx-2"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Delivered</td>
                                        <td>9<i class="icon-size-sm fa fa-truck-fast blue mx-2"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Transfered</td>
                                        <td>2
                                            <i class="fa fa-box icon-size-sm red ml-2 fa-bounce"></i>
                                            <i class="fa fa-right-left icon-size-sm mx-3"></i>
                                            <i class="fa fa-box icon-size-sm blue fa-bounce"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Exception</td>
                                        <td>1<i class="icon-size-sm fa fa-circle-exclamation fa-shake red mx-2"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Overdue</td>
                                        <td>2 <i class="icon-size-sm fa-solid fa-satellite-dish fa-shake pink mx-2"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:['profile'],
    mounted() {
        console.log('Component mounted.')
    },
    methods: {
        delivery() {
            //functionn to get to another page in vue
            this.$router.push('/delivery')
        },
        viewShipment() {
            this.$router.push('/shipment')
        },
        transfer() {
            this.$router.push('/transfer')
        },
        receive() {
            this.$router.push('/receive')
        },
        open() {
            this.$router.push('/open')
        },
        newParcel() {
            this.$router.push('/NewDrop')
        },
        newParcel2(){
            this.$router.push('/NewPick')
        },
        loadTruck() {
            this.$router.push('/Load')
        },
        unloadParcels() {
            this.$router.push('/Unload')
        },
        branchArrivals() {
            this.$router.push('/Arrivals')
        },
        damaged() {
            this.$router.push('/Damaged')
        },
        broken() {
            this.$router.push('/Broken')
        },
        penalties() {
            this.$router.push('/Penalty')
        },
        goBack() {
            this.$router.push('home')
        }
    }
}
</script>
