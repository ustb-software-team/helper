<template>
    <div>
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <tr v-for="item in items">
                            <td><router-link to="/Select"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;{{item.title}}</router-link></td>
                        </tr>
                    </table>
                </div>
            </div>
    </div>
</template>


<script>
    export default {
        name: "page-list",
        data:function(){
            return {
                items:[]
            }
        },
        mounted:function () {
            axios.get('//helper.test/api/articles', {
                params: {
                    onlyRoot: 0
                }
            }).then((response) => {
                this.items = response.data.data
            })
            this.$emit('sendText','请选择一个帮助文档') //在mounted阶段利用$emit()触发了自定义事件“sendText”
        }
    }
</script>

<style scoped>

</style>