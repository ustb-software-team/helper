<template>
    <div>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <tr v-for="select in selects">
                        <td><router-link to="/Content"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>&nbsp;{{select.message}}</router-link></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    import pageContent from './page-content'
    export default {
        name: "page-select",
        data:function () {
            return {
                selects:[]
            }
        },
        mounted:function () {
            $.ajax({
                url:"http://localhost/select.php?",
                type:"GET",
                dataType:"json",
                success:function (msg) {
                    for (let i in msg){
                        let a = { message:msg[i]};
                        this.selects.push(a);
                    }
                }.bind(this)
            });
            // axios.get('/articles',{
            //     params: {
            //         onlyRoot: 1
            //     }
            // }).then(function (response) {
            //
            // })
            this.$emit('sendText','请选择一个故障问题');
        },
        components:{
            pageContent
        }
    }
</script>

<style scoped>

</style>