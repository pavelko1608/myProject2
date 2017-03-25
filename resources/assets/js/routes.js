import VueRouter from 'vue-router';


let routes = [

{

	path: '/',

	component: require('./components/Home.vue')

},
{

	path: '/about',

	component: require('./components/About.vue')

},
{

	path: '/contact',

	component: require('./components/Contact.vue')

},
{

	path: '/account',

	component: require('./components/Account.vue')

}

];



export default new VueRouter({
	routes
	
});