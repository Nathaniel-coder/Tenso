<template>
    <div>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="col-md-11 ml-5">
            <div class="card card-widget widget-user shadow">
                <div class="widget-user-header bg-info">
                    <h3 class="widget-user-username">{{ form.name }}</h3>
                    <h5 class="widget-user-desc">{{ form.type }}</h5>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle elevation-2" :src="form.photo" alt="User Avatar">
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">{{ form.address1 }}</h5>
                                <span class="description-text">{{ form.address2 }}</span>
                            </div>
                        </div>

                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">{{ form.postcode }}</h5>
                                <span class="description-text">{{ form.city }}</span>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">{{ form.province }}</h5>
                                <span class="description-text">{{ form.country }}</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-11 ml-5">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">

                        <div class="tab-pane active" id="settings">
                            <form class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input v-model="form.name" class="form-control" type="text" name="name"
                                            placeholder="Name" :class="{ 'is-invalid': form.errors.has('name') }" />
                                        <div v-if="form.errors.has('name')" v-html="form.errors.get('name')"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputphone" class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input v-model="form.phone" class="form-control" type="number" name="phone"
                                            placeholder="Phone No." :class="{ 'is-invalid': form.errors.has('phone') }" />
                                        <div v-if="form.errors.has('phone')" v-html="form.errors.get('phone')"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input v-model="form.email" class="form-control" type="email" name="email"
                                            placeholder="Email" :class="{ 'is-invalid': form.errors.has('email') }" />
                                        <div v-if="form.errors.has('email')" v-html="form.errors.get('email')"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">Profile
                                        Photo</label>
                                    <div class="col-sm-10">
                                        <input type="file" @change="updateProfile" class="form-control-file"
                                            id="inputName2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2 col-md-3">
                                        <label for="address1" class="pt-2">Address</label>
                                    </div>
                                    <div class="col-lg-10 col-md-9">
                                        <input id="address1" v-model="form.address1" class="form-control" type="text"
                                            name="address1" placeholder="Address 1"
                                            :class="{ 'is-invalid': form.errors.has('address1') }" />
                                        <div v-if="form.errors.has('address1')" v-html="form.errors.get('address1')">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2 col-md-3">
                                        <!-- <label for="toAddress2" class="pt-2">Address 2 :</label> -->
                                    </div>
                                    <div class="col-lg-10 col-md-9 justify-content-end">
                                        <input id="address2" v-model="form.address2" class="form-control" type="text"
                                            name="toAddress2" placeholder="Address 2"
                                            :class="{ 'is-invalid': form.errors.has('address2') }" />
                                        <div v-if="form.errors.has('address2')" v-html="form.errors.get('address2')">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2 col-md-3">
                                        <label for="Postcode" class="pt-2">Postcode</label>
                                    </div>
                                    <div class="col-lg-10 col-md-9">
                                        <input id="Postcode" v-model="form.postcode" class="form-control" type="number"
                                            name="postcode" placeholder="Postcode"
                                            :class="{ 'is-invalid': form.errors.has('postcode') }" />
                                        <div v-if="form.errors.has('postcode')" v-html="form.errors.get('postcode')">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2 col-md-3">
                                        <label for="city" class="pt-2">City</label>
                                    </div>
                                    <div class="col-lg-10 col-md-9">
                                        <input id="city" v-model="form.city" class="form-control" type="text" name="city"
                                            placeholder="City" :class="{ 'is-invalid': form.errors.has('city') }" />
                                        <div v-if="form.errors.has('city')" v-html="form.errors.get('city')">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2 col-md-3">
                                        <label for="Province" class="pt-2">Province</label>
                                    </div>
                                    <div class="col-lg-10 col-md-9">
                                        <input id="Province" v-model="form.province" class="form-control" type="text"
                                            name="province" placeholder="Province"
                                            :class="{ 'is-invalid': form.errors.has('province') }" />
                                        <div v-if="form.errors.has('province')" v-html="form.errors.get('province')">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2 col-md-3">
                                        <label for="country" class="pt-2">Country</label>
                                    </div>
                                    <div class="col-lg-10 col-md-9">
                                        <input id="country" v-model="form.country" class="form-control" type="text"
                                            name="country" placeholder="Country"
                                            :class="{ 'is-invalid': form.errors.has('country') }" />
                                        <div v-if="form.errors.has('country')" v-html="form.errors.get('country')">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button @click.prevent="updateinfo" type="submit"
                                            class="btn bg-green">update</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
</template>

<script>
import {Form} from 'vform';
import Axios from 'axios';
export default {
    props:['profile'],
    data() {
        return {
            form: new Form({
                id: "",
                name: "",
                email: "",
                password: "",
                type: "",
                phone: "",
                photo: "",
                address1: "",
                address2: "",
                postcode: "",
                city: "",
                province: "",
                country: ""
            }),
        }
    },
    methods:{
        updateProfile(){

        },
        updateinfo(){
            1
        }
    },
    mounted() {
        console.log('Component mounted.')
    },
    created() {
        Axios.get("api/profile").then(({ data }) => this.form.fill(data));
    }
}
</script>
