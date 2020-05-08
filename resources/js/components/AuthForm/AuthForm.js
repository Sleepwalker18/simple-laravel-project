
export default {
  name: 'auth-form',
  components: {},
  props: [],
  data () {
    return {
      email: '',
      password: '',
    }
  },
  computed: {
    formData() {
      return {
        email: this.email,
        password: this.password,
      }
    }
  },
  mounted () {

  },
  methods: {
    login() {
      this.$store.dispatch('login', this.formData).then(() => {
        this.$router.push({ name: 'About' })
      })
      .catch(err => {
        console.log(err)
      })
    }
  }
}


