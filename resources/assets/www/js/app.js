
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('es6-promise').polyfill();
require('./bootstrap');
import {TweenMax, Power2, TimelineLite, TimelineMax} from "gsap";
window.ScrollMagic = require('scrollmagic');
require('ScrollMagicGSAP');

window.Vue = require('vue');

// Para  utilizar la funcion trans de laravel en vue
Vue.prototype.trans = string => _.get(window.i18n, string);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('topbar', require('./components/Topbar.vue'));
Vue.component('home', require('./components/Home.vue'));
Vue.component('about', require('./components/About.vue'));
Vue.component('services', require('./components/Services.vue'));
Vue.component('portfolio', require('./components/Portfolio.vue'));
Vue.component('banners', require('./components/Banners.vue'));
Vue.component('clients', require('./components/Clients.vue'));
Vue.component('brands', require('./components/Brands.vue'));
Vue.component('contact', require('./components/Contact.vue'));

const app = new Vue({
    el: '#app'
});
