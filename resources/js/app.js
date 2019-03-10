require('./bootstrap');
window.Vue = require('vue');
import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

Vue.component('navbar', require('./components/Navbar.vue').default);
Vue.component('app-footer', require('./components/Footer.vue').default);
let Home = require('./components/Home.vue').default;
let About = require('./components/About.vue').default;
const routes = [
 
  { path: '/home', component: Home },
  { path: '/about', component: About }
]

const router = new VueRouter({
  routes, // short for `routes: routes`
  // hasnbang: false,
   mode: 'history'
})

const app = new Vue({
    el: '#app',
 	router,
});
