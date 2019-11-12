/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

$(document).ready(function(){

    $('#timeout-btn').click(function(){
        $('#timeout-btn').css('pointer-events', 'none');
    });

});

if($(window).width() < 768){
    $("#top-headline").removeClass("d-flex");
    $("#top-headline div").removeClass("d-flex");
    $("#top-headline div button").removeClass("ml-4");
    $("#top-headline div button").addClass("col-6");
    $("#top-headline div button").addClass("mb-3 mt-2");
    $("#counters").removeClass("d-flex");
    $("#counters div").removeClass("pr-4");
    $("#counters .pr-4").addClass("pb-1");
}