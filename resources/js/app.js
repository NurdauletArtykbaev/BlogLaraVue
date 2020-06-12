/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


//Vuex
import Vuex from 'vuex';

Vue.use(Vuex);
import storeData from './components/store/index'
const store = new Vuex.Store({
    storeData
});

//router
import router from './routes'
import VueRouter from 'vue-router'

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
// V-Form
import { Form, HasError, AlertError } from 'vform'
window.Form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
//
//sweet alert 2
import swal from 'sweetalert2'

window.swal = swal;
const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});



window.toast = toast;


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('admin-home', require('./components/admin/AdminHome').default);
Vue.component('admin-main', require('./components/admin/AdminMaster').default);


Vue.use(VueRouter);
Vue.use(router);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
    store
});
