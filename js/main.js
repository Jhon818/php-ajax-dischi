Vue.config.devtools = true;
const app = new Vue ( {
    el: "#app",
    data: {
     cards : [],
    },
    // stampa dei dischi tramite VueJs da chiamata Api  usando un server locale php
  created() {
    axios
    .get('http://localhost:8888/php-ajax-dischi/api/server.php')
    .then( (res) => {
 this.cards = (res.data);
    })
  },
});