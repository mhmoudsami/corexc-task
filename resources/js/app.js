import Vue from 'vue';
import App from './components/App';

require('./bootstrap');



new Vue({
    el: '#main-app',
    render: h => h(App),
});