/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

    require('./bootstrap');
    window.Vue = require('vue');
    import App from './views/App';
    import VueRouter from 'vue-router'
    import Home from './pages/Home'
    import Contacs from './pages/Contacts'
    Vue.use(VueRouter);
    const router = new VueRouter({
        mode: 'history',
        routes: [
             {
                path: '/',
                name: 'home',
                component: Home
            },
             {
                path: '/contacs',
                name: 'contacs',
                component: Contacs
            },
        ]
        });

    const app = new Vue({
        el: '#app',
        render: h => h(App),
        router
    });