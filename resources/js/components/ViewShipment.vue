<template>
    <div>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Shipment</h1>
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
                                                        <th>Date</th>
                                                        <th>Sender</th>
                                                        <th>Receiver</th>
                                                        <th>
                                                            Destined Address
                                                        </th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-widget="expandable-table" aria-expanded="false" v-for="dropOff in dropOffs.data" :key="dropOff.id">
                                                        <td>
                                                            {{ dropOff.date }}
                                                        </td>
                                                        <td>
                                                            {{ dropOff.name }}
                                                        </td>
                                                        <td>
                                                            {{ dropOff.toname }}
                                                        </td>
                                                        <td>
                                                            {{ dropOff.toaddress1 }}, {{ dropOff.toaddress2 }}, {{ dropOff.topostcode }} {{ dropOff.tocity }}, {{ dropOff.toprovince }}, {{ dropOff.tocountry }}
                                                        </td>
                                                        <td>
                                                            {{ dropOff.status ? dropOff.status : "Unpaid" }}
                                                        </td>
                                                        <td>
                                                            <button class="btn bg-orange" toggle="tooltip" title="Edit">
                                                                    <i class="fa-solid fa-pen-to-square white"></i>
                                                                </button>
                                                            <button class="btn bg-red" toggle="tooltip" title="Delete">
                                                                    <i class="fa-solid fa-trash-can"></i>
                                                                </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="expandable-body d-none" id="info" v-for="dropOff in dropOffs.data" :key="dropOff.id">
                                                        <p class="ml-3">
                                                            <strong>Branch :</strong> {{ dropOff.branch }}
                                                        </p>
                                                        <p class="ml-3">
                                                            <strong>Driver :</strong> {{ dropOff.driverId ? dropOff.driverId : 'unselected' }}
                                                        </p>
                                                        <p class="ml-3">
                                                            <strong>Vehicle :</strong> {{ dropOff.vehicleId ? dropOff.vehicleId : 'unselected' }}
                                                        </p>
                                                        <p class="ml-3">
                                                            <strong>Picture :</strong>
                                                            <img src="" alt="">
                                                        </p>
                                                        <!-- <div class="row mx-1">
                                                                        <div class="col">
                                                                            <strong>Branch</strong>
                                                                        </div>
                                                                        <div class="col">
                                                                            {{ dropOff.branch }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mx-1">
                                                                        <div class="col">
                                                                            <strong>Driver</strong>
                                                                        </div>
                                                                        <div class="col">
                                                                            {{ dropOff.driverId ? dropOff.driverId : "unselected" }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mx-1">
                                                                        <div class="col">
                                                                            <strong>Vehicle</strong>
                                                                        </div>
                                                                        <div class="col">
                                                                            {{ dropOff.vehicleId ? dropOff.vehicleId : "unselected" }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mx-1">
                                                                        <div class="col">
                                                                            <strong>Picture</strong>
                                                                        </div>
                                                                        <div class="col">
                                                                            <img class="img-thumbnail" src alt />
                                                                        </div>
                                                                    </div> -->
                                                        <!-- <div class="col"><strong>Drop Off Branch ： </strong> {{ dropOff.branch }}</div>
                                                                                                    <div class="col"><strong>Driver ： </strong> {{ dropOff.driverId ? dropOff.driverId : 'unselected' }}</div>
                                                                                                    <div class="col"><strong>Vehicle ： </strong> {{ dropOff.vehicleId ? dropOff.vehicleId : 'unselected'  }}</div>
                                                                                                    <div class="col"><strong>picture</strong></div>
                                                                      <div class="col"><img class="img-thumbnail" alt=""></div>-->
                                                    </tr>
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
                                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search" />
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-default">
                                                                <i class="fas fa-search"></i>
                                                            </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body table-responsive p-0">
                                            <table class="table table-hover text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Sender</th>
                                                        <th>Receiver</th>
                                                        <th>Drop Off Branch</th>
                                                        <th>
                                                            Destined Address
                                                        </th>
                                                        <!-- <th>Driver</th>
                                                            <th>Vehicle</th>
                                                            <th>Payment</th>
                                                            <th>Status</th>
                                                            <th>Picture</th> -->
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr v-for="drop in dropOffs.data" :key="drop.id">
                                                        <td>{{ drop.date }}</td>
                                                        <td>{{ drop.name }}</td>
                                                        <td>
                                                            {{ drop.toname }}
                                                        </td>
                                                        <td>
                                                            {{ drop.branch }}
                                                        </td>
                                                        <td>
                                                            {{ drop.toaddress1 }},{{ drop.toaddress2 }},{{ drop.topostcode }} {{ drop.tocity }}, {{ drop.toprovince }},{{ drop.tocountry }}
                                                        </td>
                                                        <!-- <td>183</td>
                                                                                                <td>183</td>
                                                                                                <td>183</td>
                                                                                                <td>183</td>
                                                                    <td>183</td>-->
                                                        <td>
                                                            <button class="btn bg-orange" toggle="tooltip" title="Edit">
                                                                    <i class="fa-solid fa-pen-to-square white"></i>
                                                                </button>
                                                            <button class="btn bg-red" toggle="tooltip" title="Delete">
                                                                    <i class="fa-solid fa-trash-can"></i>
                                                                </button>
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
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {Form} from "vform";
import Swal from "sweetalert2";
import Axios from "axios";
export default {
    props: ["profile"],
    data() {
        return {
            dropOffs: {},
        };
    },
    mounted() {
        console.log("Component mounted.");
    },
    created() {
        this.loadDropOff();
        console.log(this.dropOffs.data);
    },
    methods: {
        loadDropOff() {
            axios.get("api/dropOff").then(({
                data
            }) => (this.dropOffs = data));
        }
    },
};
</script>
