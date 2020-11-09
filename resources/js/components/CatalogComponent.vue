<template>
    <div class="container">


        <h1 style="text-align: center;color: #34ce57;margin-top: 30px;margin-bottom: 30px;font-family:'Noto Sans'">НАШИ НОВИНКИ</h1>
        <div id="car" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div style="display: flex" class="carousel-item active">
                    <img src="/storage/app/public/newimage/jTzyWmnPryQvN35J4rXYqyihYFD7Wgtvt50hs7rX.jpeg" class="d-block w-10"
                         alt="...">
                    <img src="/storage/newimage/xnK7hJa2QkfalLglXdVQDlwnghqt82Ihg9wXmPki.jpeg" class="d-block w-10"
                         alt="...">
                    <img src="/storage/newimage/ENKx3BEVbBk5nxsq4FYQnf7UU5Ek0eOg8GaMPpP2.jpeg" class="d-block w-10"
                         alt="...">
                    <img src="/storage/newimage/2SGpqtcJo6tQzdiTcKCYd6XR6ytrM6NMD88mekbP.jpeg" class="d-block w-10"
                         alt="...">
                </div>
                <div style="display: flex" class="carousel-item">
                    <img src="/storage/newimage/ENKx3BEVbBk5nxsq4FYQnf7UU5Ek0eOg8GaMPpP2.jpeg" class="d-block w-10"
                         alt="...">
                    <img src="/storage/newimage/2SGpqtcJo6tQzdiTcKCYd6XR6ytrM6NMD88mekbP.jpeg" class="d-block w-10"
                         alt="...">
                    <img src="/storage/newimage/jTzyWmnPryQvN35J4rXYqyihYFD7Wgtvt50hs7rX.jpeg" class="d-block w-10"
                         alt="...">
                    <img src="/storage/newimage/xnK7hJa2QkfalLglXdVQDlwnghqt82Ihg9wXmPki.jpeg" class="d-block w-10"
                         alt="...">

                </div>
                <div style="display: flex" class="carousel-item">
                    <img src="/storage/newimage/jTzyWmnPryQvN35J4rXYqyihYFD7Wgtvt50hs7rX.jpeg" class="d-block w-10"
                         alt="...">
                    <img src="/storage/newimage/xnK7hJa2QkfalLglXdVQDlwnghqt82Ihg9wXmPki.jpeg" class="d-block w-10"
                         alt="...">
                    <img src="/storage/newimage/ENKx3BEVbBk5nxsq4FYQnf7UU5Ek0eOg8GaMPpP2.jpeg" class="d-block w-10"
                         alt="...">
                    <img src="/storage/newimage/2SGpqtcJo6tQzdiTcKCYd6XR6ytrM6NMD88mekbP.jpeg" class="d-block w-10"
                         alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#car" role="button" data-slide="prev">
            </a>
            <a class="carousel-control-next" href="#car" role="button" data-slide="next">
            </a>
        </div>
        <div id="qq" class="booksINcatalog">
            <div class="books" v-for="book in books">
                <div class="card-header">
                    <div class="card-text">{{ book.author }}</div>
                </div>
                <div class="card text-center" style="width: 18rem;">
                    <img v-bind:src="'/storage/'+book.picture">
                    <div class="card-body ">
                        <h4 class="card-text">{{ book.name }}</h4>
                        <div class="card-text">{{ book.description }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CatalogComponent",
    data() {
        return {
            books: [],

        }
    },
    mounted() {
        this.getbook();
        //     axios.get('/listbooks').then((resp)=>{
        //         this.books=resp.data;
        //     })
    },
    methods: {
        getbook: function () {
            axios.get('/listbooks').then((resp) => {
                this.books = resp.data;
            })
        }
    }
}
</script>

<style scoped>

.container {
    /*position: relative;*/
    /*display: flex;*/
    /*justify-content: center;*/
    /*align-content: center;*/
}

.booksINcatalog {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}

.books {
    width: 17.4em;
    height: 31em;
    margin-top: 3em;
    margin-left: 3em;
    box-shadow: 1em 1em 2em grey;
    border: 3px solid white;
    border-radius: 0.5em;
    overflow: hidden;
}

img {
    width: 15em;
    height: 19em;
    align-content: center;
    /*width: 17em;*/
    /*height: 21em;*/
}

h4 {
    color: greenyellow;
    text-align: center;
    font-family: "Noto Sans";
}

#car {
    position: relative;
    width: 90%;
    left: 100px;
}
/*#qq :hover{*/
/*    border: 3px solid lawngreen;*/

/*}*/
.card-text{
    font-family: "Noto Sans";
}
</style>
