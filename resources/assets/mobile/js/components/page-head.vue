<template>
    <div class="container">
        <div id="img" class="col-xs-2"><img src="../../img/tianjin.jpg" /></div>
        <div id="title" class="col-xs-10">{{title}}</div>
    </div>
</template>

<script>
    export default {
        name:'page-head',
        props:['title']
    }
</script>

<style>

</style>