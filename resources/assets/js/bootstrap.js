

import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';



window.Vue = require('vue');
Vue.use(VueRouter);



window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};

