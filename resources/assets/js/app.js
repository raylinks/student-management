/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

window.Vue = require('vue');

//import {url} from "./Utility/mastery"

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

Vue.component('manage', require('./components/Form.vue'));

Vue.component('addProgram', require('./components/teach.vue'));

Vue.component('add-course', require('./components/teach.vue'));

Vue.component('add-student', require('./components/stude.vue'));

Vue.component('add-section', require('./components/Show.vue'));

Vue.component('add-level', require('./components/Show.vue'));

Vue.component('add-time', require('./components/Show.vue'));

Vue.component('add-batch', require('./components/Show.vue'));

Vue.component('add-group', require('./components/Show.vue'));

Vue.component('add-acad', require('./components/AcademicPopup.vue'));

Vue.component('add-shift', require('./components/Show.vue'));

Vue.component('section-one', require('./components/SectionOne.vue'));

Vue.component('form-request', require('./components/Req.vue'));

Vue.component('form-view', require('./components/Login.vue'));

Vue.component('profile-update', require('./components/Profile.vue'));




//Vue.component('add-teacher', require('./components/stude.vue'));


const app = new Vue({
    el: '#app',


});


