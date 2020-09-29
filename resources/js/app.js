/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');
import router from './router';
import 'animate.css';
import 'bootstrap-css-only';
import "@lottiefiles/lottie-player";
import VueSocialSharing from 'vue-social-sharing';

Vue.use(VueSocialSharing);
import TextHighlight from "vue-text-highlight";

Vue.component("Highlight", TextHighlight);
// Vue.use(Bootstrap)

// import routes from './router';
// import {
//     compact
// } from 'lodash';
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('App', require('./components/AppComponent.vue').default);
Vue.component('Header', require('./components/Header.vue').default);
// Vue.component('Pagination', require('./components/pages/Pagination.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// Global Variable for routing paths
Vue.prototype.$APPURL = '/vue-kurals/public/';
const app = new Vue({
    el: '#app',
    router
});
