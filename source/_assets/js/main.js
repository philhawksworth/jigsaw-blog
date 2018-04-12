import Vue from 'vue';
import VeeValidate from 'vee-validate';
import SocialSharing from 'vue-social-sharing';
import './highlight';

window.eventBus = new Vue();

Vue.component('contact-form', require('./components/ContactForm'));
Vue.component('fa', require('./components/Icon'));
Vue.component('post-warning', require('./components/PostWarning'));
Vue.component('notification', require('./components/Notification'));

Vue.use(VeeValidate);
Vue.use(SocialSharing);

new Vue({
    data: {
        navbarActive: false,
        currentYear: (new Date()).getFullYear()
    }
}).$mount('#app');
