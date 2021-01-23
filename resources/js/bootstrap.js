import Vue from 'vue';

window.JQuery = window.$ = require('jquery');
require('popper.js');
require('bootstrap');

window._ = require('lodash');
window.axios = require('axios');
window.Vue = require('vue');
window.feather = require('feather-icons');

feather.replace();

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

Vue.component('chat-body', require('./components/Chat/Body').default);
Vue.component('chat-footer', require('./components/Chat/Footer').default);
Vue.component('chat-header', require('./components/Chat/Header').default);
Vue.component('sidebar-chat', require('./components/Sidebar/Chat').default);
Vue.component('sidebar-friends', require('./components/Sidebar/Friends').default);
Vue.component('sidebar-favorites', require('./components/Sidebar/Favorites').default);
Vue.component('sidebar-items-thread', require('./components/Sidebar/Items/ThreadItem').default);
Vue.component('sidebar-items-favorite', require('./components/Sidebar/Items/FavoriteItem').default);
Vue.component('sidebar-items-friend', require('./components/Sidebar/Items/FriendItem').default);


$(document).on('click', '.layout .content .sidebar-group .sidebar .list-group-item', function () {
    // if (JQuery.browser.mobile) {
    //     $(this).closest('.sidebar-group').removeClass('mobile-open');
    // }
});

//Register all components on components folder.
// const files = require.context('./components', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
