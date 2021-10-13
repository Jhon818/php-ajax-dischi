Vue.config.devtools = true;
const app = new Vue({
    el: "#app",
    data: {
        inputText: "",
        cards: [],
        albumGenre: [],
    },
    // stampa dei dischi tramite VueJs da chiamata Api usando un server locale php
    created() {
        axios
            .get('http://localhost:8888/php-ajax-dischi/api/server.php')
            .then((res) => {
                this.cards = (res.data);
            })
           

    }, methods: {
        filteredAlbumList() {
            axios
            .get('http://localhost:8888/php-ajax-dischi/api/server.php')
            .then((res) => {
                // filtering array using filter method
                this.cards = (res.data.filter(item => item.genre.toLowerCase().includes(this.inputText)));
            })
        },
    }

});