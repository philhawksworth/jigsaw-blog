import Vue from 'vue';

Vue.component('contact-form', require('./components/ContactForm'));

new Vue({
    data: {
        navbarActive: false,
        currentYear: (new Date()).getFullYear()
    }
}).$mount('#app');
