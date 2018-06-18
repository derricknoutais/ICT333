
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import BootstrapVue from 'bootstrap-vue';
import Vuelidate from 'vuelidate'

window.Vue = require('vue');

Vue.use(BootstrapVue);
Vue.use(Vuelidate)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('create-staff', require('./components/staff/CreateStaffComponent.vue'));
Vue.component('create-unit', require('./components/unit/CreateUnitComponent.vue'));
Vue.component('create-offering', require('./components/offering/CreateOfferingComponent.vue'));

const app = new Vue({
    el: '#app',
    data: {
        message: 'Hello'
    },
    methods: {
      
    }
});
