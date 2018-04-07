import Vue from 'vue';

new Vue({
    data: {
        navbarActive: false,
        currentYear: (new Date()).getFullYear()
    }
}).$mount('#app');
