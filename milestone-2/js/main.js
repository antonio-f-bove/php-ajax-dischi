const app = new Vue ({
  el: '#app',
  data: {
    albums: [],
    genresList: [],
    genre: '',
  },
  methods: {
    fetchData() {
      axios
        .get('http://localhost:8888/php-ajax-dischi/milestone-1/server.php', {
          params: {
            genre: this.genre
          }
        })
        .then(res => {
          this.albums = res.data;
          this.getGenres();
        })
    },
    getGenres() {
      const genres = this.albums.map(a => a.genre);
      genres.forEach(genre => {
        if(!this.genresList.includes(genre)) this.genresList.push(genre);
      })
    }
  }, 
  created() {
    this.fetchData();
  },
})