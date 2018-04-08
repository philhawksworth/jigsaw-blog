import Vue from 'vue';
import VeeValidate from 'vee-validate';

Vue.component('contact-form', require('./components/ContactForm'));

Vue.use(VeeValidate);

new Vue({
    data: {
        navbarActive: false,
        currentYear: (new Date()).getFullYear()
    }
}).$mount('#app');
