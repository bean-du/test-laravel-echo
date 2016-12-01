
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

window.Pusher = require('pusher-js');

import Echo from "laravel-echo";

window.Echo = new Echo({
    broadcaster:'pusher',
    key:'86cb4ae45cbc646bb1d3'
});

Echo.channel('chat-room.1')
    .listen('ChatMessageWasReceived',(e)=>{
    console.log(e.user,e.ChatMessage);
});