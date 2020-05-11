export const userMixin ={

	created () {
	  const userInfo = localStorage.getItem('user')
	  if (userInfo) {
	    const userData = JSON.parse(userInfo)
	    this.$store.commit('setUserData', userData)
	  }
	  axios.interceptors.response.use(
	    response => response,
	    error => {
	      if (error.response.status === 401) {
	        this.$store.dispatch('logout')
	      }
	      return Promise.reject(error)
	    }
	  )
	}

}