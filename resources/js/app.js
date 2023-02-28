/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import moment from 'moment';
import VueProgressBar from 'vue-progressbar'
import { Form, Errors } from 'vform';
import Swal from 'sweetalert2';
// import { Bootstrap4Pagination } from 'laravel-vue-pagination';
Window.Form = Form;
Window.swal = Swal;

window.Fire = new Vue();

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

window.toast = Toast;

Vue.component(Errors.name, Errors)

import VueRouter from 'vue-router'

Vue.use(VueRouter)

const options = {
    color: '#6610f2',
    failedColor: '#dc3545',
    thickness: '5px',
    transition: {
        speed: '0.2s',
        opacity: '0.6s',
        termination: 300
    }
}

Vue.use(VueProgressBar, options)

let routes = [
    { path: '/dashboard', component: require('./components/Dashboard.vue').default },
    { path: '/developer', component: require('./components/Developer.vue').default },
    { path: '/profile', component: require('./components/Profile.vue').default },
    { path: '/contact', component: require('./components/Contact.vue').default },
    { path: '/staff', component: require('./components/Staff.vue').default },
    { path: '/hr', component: require('./components/HumanResources.vue').default },
    { path: '/carholder', component: require('./components/CarHolder.vue').default },
    { path: '/home', component: require('./components/Home.vue').default },
    { path: '/delivery', component: require('./components/Delivery.vue').default },
    { path: '/shipment', component: require('./components/ViewShipment.vue').default },
    { path: '/transfer', component: require('./components/TransferShipmentTenso.vue').default },
    { path: '/receive', component: require('./components/ReceiveShipmentTenso.vue').default },
    { path: '/Open', component: require('./components/OpenBagTenso.vue').default },
    { path: '/NewDrop', component: require('./components/NewDropOff.vue').default },
    { path: '/NewPick', component: require('./components/NewPickUp.vue').default },
    { path: '/Load', component: require('./components/LoadTruck.vue').default },
    { path: '/Unload', component: require('./components/UnloadParcels.vue').default },
    { path: '/Arrivals', component: require('./components/BranchArrivals.vue').default },
    { path: '/Damaged', component: require('./components/ParcelDamaged.vue').default },
    { path: '/Broken', component: require('./components/ParcelBroken.vue').default },
    { path: '/Penalty', component: require('./components/ParcelBroken.vue').default },
    { path: '/Invoice', component: require('./components/Invoice.vue').default},
    { path: '*', component: require('./components/NotFound.vue').default }
]


const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))


const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
})

Vue.filter('upText', function (text) {
    return text.charAt(0).toUpperCase() + text.slice(1);
})

Vue.filter('myDate', function () {
    return moment().format('Do MMMM YYYY');
})

Vue.filter('invoiceDate', function () {
    return moment().format('myd');
})
Vue.filter('Date', function () {
    return moment().format('d/m/Y');
})

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('pagination', require('laravel-vue-semantic-ui-pagination'));

Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue').default
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue').default
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue').default
);
Vue.component(
    'not-found',
    require('./components/NotFound.vue').default
);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
    tooltipList,
    data:{
        search: ''
    },
    methods:{
        searchit:_.debounce(()=>{
            Fire.$emit('searching');
        },1000),

        printMe() {
            window.print();
        },
        refresh() {
            Location.refresh();
        }
    }
});
