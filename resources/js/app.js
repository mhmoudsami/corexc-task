import Vue from 'vue';
import App from './components/App';
import VueToastr from "vue-toastr";

require('./bootstrap');

Vue.use(VueToastr , {
	defaultPosition: 'toast-top-center'
});

new Vue({
    el: '#main-app',
    render: h => h(App),
});