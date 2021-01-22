require('./bootstrap');

import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue';
import {InertiaApp} from '@inertiajs/inertia-vue';

Vue.use(BootstrapVue);
Vue.use(InertiaApp);

const app = document.getElementById('app')

new Vue({
    render: h => h(InertiaApp, {
        props: {
            initialPage: JSON.parse(app.dataset.page),
            resolveComponent: name => require(`./pages/${name}`).default,
        },
    }),
});


