


require('./bootstrap');
import router from './routes';



Vue.component('products', require('./components/Product.vue'));





 new Vue({
    el: '#app',
    router: router
    
  
  
});
