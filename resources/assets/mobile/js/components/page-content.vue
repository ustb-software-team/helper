<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="alert alert-success">{{message}}</div><!--TODO:此处数据由数据库查询得来，存储在localstorage-->
            </div>
            <div class="row" id="button">
                <button class="btn btn-default">解决</button>
                <button class="btn btn-default" v-on:click="pick">未解决</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "page-content",
        data(){
            return{
                message:'此处内容从localstorage读取',
                index:1
            }
        },
        mounted:function (){
            this.$emit('sendText','请查看该方法是否解决您的问题？');
            $.ajax({
                url:'http://localhost/message.php',
                type:'GET',
                dataType:'json',
                success:function (data) {
                    let a = 1;
                    for (let i in data){
                        sessionStorage[a] = data[i];
                        a++;
                    };
                    this.message = sessionStorage[this.index];

                }.bind(this)
            })
        },
        methods:{
            pick:function () {
                this.index++;
                // alert(this.index);
                if (sessionStorage[this.index]===undefined)
                {
                    return false;
                }else {
                    this.message = sessionStorage[this.index];
                }
            }
        }
    }
</script>

<style scoped>
    #button{
        text-align: center;
    }
</style>