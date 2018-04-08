<template>
    <div class="container">
        <div class="row" v-for="helpdocument in helpdocuments">
            <div class="col-md-1"></div>
            <router-link class="col-md-8" to="/Edit">{{helpdocument.message}}</router-link>
            <model></model>
        </div>
    </div>
</template>

<script>
    import model from './model'

    export default {
        name: "admin-list",
        data(){
            return{
                helpdocuments:[]
            }
        },
        mounted(){
            this.axios.get("http://localhost/list.php?")
                .then(response => {
                    for(let i in response.data){
                        let a = { message:response.data[i] };
                        this.helpdocuments.push(a);
                    }
                });
        },
        components:{
            model
        }
    }
</script>

<style scoped>

</style>