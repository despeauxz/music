
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

var Vuex = require('vuex');
var VueResource = require('vue-resource');
var store = require('./store');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('music-index', require('./components/music/Index.vue'));
Vue.component('listen-index', require('./components/music/listen/ListenIndex.vue'));
Vue.component('player', require('./components/player/Player.vue'));

Vue.use(Vuex);
Vue.use(VueResource);

const app = new Vue({
    el: '#app',
    store,
    data: window.music
});
