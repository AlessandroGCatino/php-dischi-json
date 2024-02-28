const { createApp } = Vue

createApp({
  data() {
    return {
      apiURl: "server.php",
      library: [],
    }
  },
  mounted(){
    this.readDiscs();
  },
  methods: {
    readDiscs(){
      axios
        .get(this.apiURl)
        .then((response) => {
          this.library = response.data
        })


    }

  }
}).mount('#app')