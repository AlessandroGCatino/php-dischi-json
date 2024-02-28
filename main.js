const { createApp } = Vue

createApp({
  data() {
    return {
      apiURl: "server.php",
      library: [],
      bigPicture : "null",
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
    },
    setPrimary(index){
      this.bigPicture = index
    }

  }
}).mount('#app')