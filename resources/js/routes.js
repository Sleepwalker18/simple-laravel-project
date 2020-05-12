/*In this file you can add routes to app*/

import VueRouter from 'vue-router';

/*Auth views*/
import LoginView from './views/Auth/Login.vue';

import HomeView from './views/HomeView.vue';

export const router = new VueRouter({
	history: true,
	mode: 'history',
	routes: [
		/*Auth views*/
		{
			path: '/',
			name: 'Login',
			component: LoginView,
			meta: {
				title: 'Login'
			}
		},
		{
	    path: '/about',
    	name: 'About',
    	component: HomeView,
    	meta: {
	    	auth: true
	    },
	  },
	  { 
	  	path: "*", 
	  	redirect: "/" 
	  }
	]
})

router.beforeEach((to, from, next) => {
  const loggedIn = localStorage.getItem('user')

  if (to.matched.some(record => record.meta.auth) && !loggedIn) {
    next('/')
    return
  }
  next()
  return
})