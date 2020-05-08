<template>
	<div class="container mt-5">
		<AuthForm/>
	</div>
</template>


<script type="text/javascript">

	import AuthForm from './../../components/AuthForm/index.vue';
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
			'AuthForm': AuthForm,
		}

	}
</script>