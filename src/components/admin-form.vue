<template>
    <div class="container">
            <div style="background-color: aquamarine;width: 400px;height: 50px;">这里放二叉树~~~~</div>
            <form class="form-inline" method="post" action="">
                <div class="form-group">
                    <span>文档标题：</span><input class="form-control" type="text">
                </div>
                <div class="form-group">
                    <span>乱七八糟标题：</span><input class="form-control" type="text">
                </div>
                <div></div>
                <Editor></Editor>
                <div id="submit">
                    <button class="btn btn-default">建立节点</button>
                </div>
            </form>
    </div>
</template>

<script>
    import '../assets/css/every.css'
    import Editor from '../components/admin-editor'
    export default {
        name: "admin-form",
        components:{
            Editor
        }
    }
</script>

<style scoped>
    div{
        margin-bottom: 15px;
    }
    #submit{
        text-align: center;
    }
</style>