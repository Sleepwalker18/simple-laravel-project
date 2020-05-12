<template>
	<div class="container mt-5">
		<LoginForm/>
	</div>
</template>


<script type="text/javascript">

	import LoginForm from './../../components/LoginForm/index.vue';
	import { mapGetters } from 'vuex'

	export default {

		computed: {
	    ...mapGetters([
	      'isLogged'
	    ])
	  },

	 	mounted() {
	 		this.redirect()
	 	},

	 	methods: {
	 		redirect() {
	 			if(this.isLogged) {
	 				this.$router.push({ name: 'About' })
	 			} 
	 		}
	 	},

		components: {
			'LoginForm': LoginForm,
		}

	}
</script>