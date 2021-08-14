
new Vue({
  el: '#app',
  data: {
    products: [],
    teste: '',
    search: '',
  },
  methods: {
    getProduct() {
      axios.get('/getProduct', {
        params: {
          search: this.search,
        }
      })
        .then((response) => {
          this.products = response.data;
        });
    },
  }
});