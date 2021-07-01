
new Vue({
  el: '#app',
  data: {
    products: [],
    teste: '',
    search: '',
  },
  methods: {
    getProduct(value) {
      axios.get('/getProduct/' + this.search)
        .then((response) => {
          this.products = response.data;
        });
    },
  }
});