
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter);

import ProfileSummary from './components/ProfileSummary.vue'
import About from './components/About.vue'
import Project from './components/Project.vue'
import Contact from './components/Contact.vue'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'landing',
            component: ProfileSummary
        },
        {
            path: '/about',
            name: 'about',
            component: About,
        },
        {
            path: '/myworks',
            name: 'myworks',
            component: Project,
        },
        {
            path: '/contact',
            name: 'contact',
            component: Contact,
        },
    ],
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



const app = new Vue({
    el: '#app',
    router
});
