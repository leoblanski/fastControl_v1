
require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import VueRouter from 'vue-router'
import Auth from './auth.js'
import Api from './api.js';

window.api = new Api();
window.auth = new Auth();

Vue.use(VueRouter);

Vue.component('user-component', require('./components/UserComponent.vue').default);

const app = new Vue({
  el: '#app',
});