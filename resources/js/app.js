/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap'

import Vue from 'vue'
import VueMaterial from 'vue-material'
// import VueRouter from 'vue-router'
import 'vue-material/dist/vue-material.min.css'
import 'vue-material/dist/theme/default.css'

window.Vue = Vue

// Vue.use(VueRouter)
Vue.use(VueMaterial)

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// const routes = [
//     { path: '/', redirect: { name: 'login' }},
//     { path: '/login', name: 'login', component: LoginScreen },
//     { path: '/presentations/:id/view', name: 'presentation/view', component: Presentation },
//     { path: '/presentations/:id/edit', name: 'presentation/edit', component: PresentationData },
//     { path: '/presentations/create', name: 'presentation/create', component: PresentationData },
//     { path: '/presentations/:id/control', name: 'presentation/control', component: PresentationControl },
// ]
  
// const router = new VueRouter({
//     mode: 'history',
//     routes
// })

const app = new Vue({
    // router,
    el: '#app',
})
