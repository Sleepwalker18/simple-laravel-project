<template>
	<div class="container">
		<p class="mt-5">This is the index view</p>
		<button type="button" @click="logout()" v-if="isLogged">Logout</button>
		<ContactForm/>
	</div>
</template>

<script type="text/javascript">
	
	import ContactForm from './../components/CrudForm/index.vue';
	import { mapGetters } from 'vuex'

	export default {

		computed: {
	    ...mapGetters([
	      'isLogged'
	    ])
	  },

	  methods: {
	    logout () {
	      this.$store.dispatch('logout')
	    }
	  },

		components: {
			'ContactForm': ContactForm,
		}

	}
</script>