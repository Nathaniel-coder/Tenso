<template>
    <div class="container-fluid">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3>150</h3>
                                    <p>New Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>53<sup style="font-size: 20px">%</sup></h3>
                                    <p>Bounce Rate</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-yellow text-light">
                                <div class="inner">
                                    <h3>{{ count }}</h3>
                                    <p>User Registrations</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>65</h3>
                                    <p>Unique Visitors</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">CPU Traffic</span>
                                    <span class="info-box-number">
                                        10
                                        <small>%</small>
                                    </span>
                                </div>

                            </div>

                        </div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1"><i
                                        class="fas fa-thumbs-up"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Likes</span>
                                    <span class="info-box-number">41,410</span>
                                </div>

                            </div>

                        </div>


                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-green elevation-1"><i
                                        class="fas fa-shopping-cart"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sales</span>
                                    <span class="info-box-number">760</span>
                                </div>

                            </div>

                        </div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1 text-light"><i class="fas fa-users"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">New Members</span>
                                    <span class="info-box-number">2,000</span>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Monthly Recap Report</h5>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-tool dropdown-toggle"
                                                data-toggle="dropdown">
                                                <i class="fas fa-wrench"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                <a href="#" class="dropdown-item">Action</a>
                                                <a href="#" class="dropdown-item">Another action</a>
                                                <a href="#" class="dropdown-item">Something else here</a>
                                                <a class="dropdown-divider"></a>
                                                <a href="#" class="dropdown-item">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md">
                                            <p class="text-center">
                                                <strong>Goal Completion</strong>
                                            </p>
                                            <div class="progress-group">
                                                Add Products to Cart
                                                <span class="float-right"><b>160</b>/200</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                                                </div>
                                            </div>

                                            <div class="progress-group">
                                                Complete Purchase
                                                <span class="float-right"><b>310</b>/400</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-danger" style="width: 75%"></div>
                                                </div>
                                            </div>

                                            <div class="progress-group">
                                                <span class="progress-text">Visit Premium Page</span>
                                                <span class="float-right"><b>480</b>/800</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-success" style="width: 60%"></div>
                                                </div>
                                            </div>

                                            <div class="progress-group">
                                                Send Inquiries
                                                <span class="float-right"><b>250</b>/500</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-sm-3 col-6">
                                            <div class="description-block border-right">
                                                <span class="description-percentage text-success"><i
                                                        class="fas fa-caret-up"></i> 17%</span>
                                                <h5 class="description-header">$35,210.43</h5>
                                                <span class="description-text">TOTAL REVENUE</span>
                                            </div>

                                        </div>

                                        <div class="col-sm-3 col-6">
                                            <div class="description-block border-right">
                                                <span class="description-percentage text-warning"><i
                                                        class="fas fa-caret-left"></i> 0%</span>
                                                <h5 class="description-header">$10,390.90</h5>
                                                <span class="description-text">TOTAL COST</span>
                                            </div>

                                        </div>

                                        <div class="col-sm-3 col-6">
                                            <div class="description-block border-right">
                                                <span class="description-percentage text-success"><i
                                                        class="fas fa-caret-up"></i> 20%</span>
                                                <h5 class="description-header">$24,813.53</h5>
                                                <span class="description-text">TOTAL PROFIT</span>
                                            </div>

                                        </div>

                                        <div class="col-sm-3 col-6">
                                            <div class="description-block">
                                                <span class="description-percentage text-danger"><i
                                                        class="fas fa-caret-down"></i> 18%</span>
                                                <h5 class="description-header">1200</h5>
                                                <span class="description-text">GOAL COMPLETIONS</span>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Projects</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <table class="table table-striped projects">
                                        <thead>
                                            <tr>
                                                <th style="width: 1%">
                                                    #
                                                </th>
                                                <th style="width: 20%">
                                                    Project Name
                                                </th>
                                                <th>
                                                    Project Progress
                                                </th>
                                                <th style="width: 8%" class="text-center">
                                                    Status
                                                </th>
                                                <th style="width: 20%">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    #
                                                </td>
                                                <td>
                                                    <a>
                                                        AdminLTE v3
                                                    </a>
                                                    <br />
                                                </td>
                                                <td class="project_progress">
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-green" role="progressbar"
                                                            aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 57%">
                                                        </div>
                                                    </div>
                                                    <small>
                                                        57% Complete
                                                    </small>
                                                </td>
                                                <td class="project-state">
                                                    <span class="badge badge-success">Success</span>
                                                </td>
                                                <td class="project-actions text-right">
                                                    <a class="btn btn-primary btn-sm" href="#">
                                                        <i class="fas fa-folder">
                                                        </i>
                                                        View
                                                    </a>
                                                    <a class="btn btn-info btn-sm" href="#">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-danger btn-sm" href="#">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    #
                                                </td>
                                                <td>
                                                    <a>
                                                        AdminLTE v3
                                                    </a>
                                                    <br />
                                                </td>
                                                <td class="project_progress">
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-green" role="progressbar"
                                                            aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 47%">
                                                        </div>
                                                    </div>
                                                    <small>
                                                        47% Complete
                                                    </small>
                                                </td>
                                                <td class="project-state">
                                                    <span class="badge badge-success">Success</span>
                                                </td>
                                                <td class="project-actions text-right">
                                                    <a class="btn btn-primary btn-sm" href="#">
                                                        <i class="fas fa-folder">
                                                        </i>
                                                        View
                                                    </a>
                                                    <a class="btn btn-info btn-sm" href="#">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-danger btn-sm" href="#">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    #
                                                </td>
                                                <td>
                                                    <a>
                                                        AdminLTE v3
                                                    </a>
                                                    <br />
                                                </td>
                                                <td class="project_progress">
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-green" role="progressbar"
                                                            aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 77%">
                                                        </div>
                                                    </div>
                                                    <small>
                                                        77% Complete
                                                    </small>
                                                </td>
                                                <td class="project-state">
                                                    <span class="badge badge-success">Success</span>
                                                </td>
                                                <td class="project-actions text-right">
                                                    <a class="btn btn-primary btn-sm" href="#">
                                                        <i class="fas fa-folder">
                                                        </i>
                                                        View
                                                    </a>
                                                    <a class="btn btn-info btn-sm" href="#">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-danger btn-sm" href="#">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Online Store Overview</h3>
                                    <div class="card-tools">
                                        <a href="#" class="btn btn-sm btn-tool">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-tool">
                                            <i class="fas fa-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                        <p class="text-success text-xl">
                                            <i class="ion ion-ios-refresh-empty"></i>
                                        </p>
                                        <p class="d-flex flex-column text-right">
                                            <span class="font-weight-bold">
                                                <i class="ion ion-android-arrow-up text-success"></i> 12%
                                            </span>
                                            <span class="text-muted">CONVERSION RATE</span>
                                        </p>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                        <p class="text-warning text-xl">
                                            <i class="ion ion-ios-cart-outline"></i>
                                        </p>
                                        <p class="d-flex flex-column text-right">
                                            <span class="font-weight-bold">
                                                <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                                            </span>
                                            <span class="text-muted">SALES RATE</span>
                                        </p>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mb-0">
                                        <p class="text-danger text-xl">
                                            <i class="ion ion-ios-people-outline"></i>
                                        </p>
                                        <p class="d-flex flex-column text-right">
                                            <span class="font-weight-bold">
                                                <i class="ion ion-android-arrow-down text-danger"></i> 1%
                                            </span>
                                            <span class="text-muted">REGISTRATION RATE</span>
                                        </p>
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
    export default{
        data() {
        return {
            count: ''
        };
    },
    methods: {
        loadDashboard() {
            axios.get("api/dashboard").then(({ data }) => (this.count = data));
            }
        },
        created() {
            this.loadDashboard();
        }
    }
</script>
