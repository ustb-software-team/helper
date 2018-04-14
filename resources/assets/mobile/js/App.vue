<template>
    <div id="app">
        <page-head v-bind:title="title"></page-head><!--v-bind将属性值动态绑定到父组件的data中-->
        <br>
        <router-view v-on:sendText="show"></router-view><!--“v-on”监听子组件的sendText方法-->
    </div>
</template>

<script>
    import pageHead from './components/page-head'

    export default {
        name: 'app',
        data:function () {
            return{
                title:''
            }
        },
        methods:{
            parentFunction:function (text){
                this.title = text;
            },
            show:function (a) {//子组件的自定义事件sendText触发时，会调用此方法处理
                this.title = a;
            }
        },
        components:{
            pageHead
        }
    }
</script>

<style lang="scss">

</style>
