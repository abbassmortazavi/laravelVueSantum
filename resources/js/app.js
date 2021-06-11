

require('./bootstrap');

window.Vue = require('vue');
import routes from './routes';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Vue from 'vue';

const router = new VueRouter(routes);



Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
    router
});
