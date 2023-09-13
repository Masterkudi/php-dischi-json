"use strict"

const app = Vue.createApp({
    data() {
        return {
            albums: []
        }
    },
    mounted() {
        axios.get("./api/album.php").then((response) => {
            this.albums = response.data
        })
    }
}).mount('#app')
