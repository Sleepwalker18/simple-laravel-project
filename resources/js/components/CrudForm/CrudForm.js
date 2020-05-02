export default {
  name: 'crud-form',
  components: {},
  props: [],
  data () {
    return {
      first_name: "",
      last_name: "",
      email: "",
      contacts: [],
    }
  },
  computed: {
    formData() {
      return {
        first_name: this.first_name,
        last_name: this.last_name,
        email: this.email
      }
    }
  },
  mounted () {
    this.getContacts()
  },
  methods: {
    getContacts() {
      axios.get('/contacts').then( res => {
        this.contacts = res.data
      })
      .catch(err => {
        console.log(err)
      })
    },

    saveContact() {
      axios.post('/contacts/save', this.formData).then( res => {
        this.getContacts()
      })
      .catch(err => {
        console.log(err)
      })
    },

    deleteContact(id_contact) {
      axios.delete(`/contacts/delete/${id_contact.id}`).then( res => {
        this.getContacts()
      })
      .catch(err => {
        console.log(err)
      })
    }

  }
}


