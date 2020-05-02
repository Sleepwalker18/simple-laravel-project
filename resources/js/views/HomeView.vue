<template>
	<div class="container">
		<p class="mt-5">This is the index view</p>
		<ContactForm/>
	</div>
</template>

<script type="text/javascript">

	import ContactForm from './../components/CrudForm/index.vue';

	export default {
		components: {
			'ContactForm': ContactForm,
		}
	}
</script>