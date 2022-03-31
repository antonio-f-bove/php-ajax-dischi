const app = new Vue ({
  el: '#app',
  data: {
    albums: [],
  },
  methods: {
    fetchData() {
      axios
        .get('http://localhost:8888/php-ajax-dischi/milestone-1/server.php')
        .then(res => {
          this.albums = res.data;
        })
    }
  }, 
  created() {
    this.fetchData();
  }
})