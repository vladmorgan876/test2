<template>
<!--    <div class="dropdown">-->
<!--        <button class="btn btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-on:click="getcategory">-->
<!--           Категории-->
<!--        </button>-->
<!--        <div v-for="cat in category" class="dropdown-menu" aria-labelledby="dropdownMenuButton">-->
<!--            <div><a class="dropdown-item" href="#">{{cat.category}}</a></div>-->
<!--        </div>-->
<!--    </div>-->
</template>

<script>
export default {
    name: "component2",
    data(){
        return{
            category:[],
        }
    },
    mounted() {
        this.getcategory();
        // axios.get('/getcategoryes').then((resp) => {
        //     this.category = resp.data;
        // })
    },
    methods:{
        getcategory:function (){
            axios.get('/getcategoryes').then((resp) => {
                this.category = resp.data;
            })
console.log( this.category);
        }
    }
}
</script>

<style scoped>

</style>
