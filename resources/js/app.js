require('./bootstrap');

import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue';
import { App, plugin } from '@inertiajs/inertia-vue';

Vue.use(BootstrapVue);
Vue.use(plugin);

const app = document.getElementById('app')

new Vue({
    render: h => h(App, {
        props: {
            initialPage: JSON.parse(app.dataset.page),
            resolveComponent: name => require(`./pages/${name}`).default,
            transformProps: props => {
                return {
                    ...props,
                    errors: new Error(props.errors),
                }
            },
        },
    }),
}).$mount(app);

