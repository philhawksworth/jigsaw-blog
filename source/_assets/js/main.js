import Vue from 'vue';
import VeeValidate from 'vee-validate';
import SocialSharing from 'vue-social-sharing';
import VueDisqus from 'vue-disqus';
import './highlight';

window.eventBus = new Vue();

Vue.component('contact-form', require('./components/ContactForm'));
Vue.component('icon', require('./components/Icon'));
Vue.component('post-warning', require('./components/PostWarning'));
Vue.component('notification', require('./components/Notification'));
Vue.component('field', require('./components/Field'));

Vue.use(VeeValidate);
Vue.use(SocialSharing);
Vue.use(VueDisqus);

new Vue({
    data: {
        navbarActive: false,
        currentYear: (new Date()).getFullYear()
    }
}).$mount('#app');
