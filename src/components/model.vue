<template>
    <div>
        <Button @click="modal2 = true">删除</Button>
        <Modal v-model="modal2" width="360">
            <p slot="header" style="color:#f60;text-align:center">
                <Icon type="information-circled"></Icon>
                <span>删除</span>
            </p>
            <div style="text-align:center">
                <p>确定删除吗？</p>
            </div>
            <div slot="footer">
                <Button type="error" size="large" long :loading="modal_loading" @click="del">删除</Button>
            </div>
        </Modal>
    </div>
</template>

<script>
    import 'iview/dist/styles/iview.css'
    export default {
        name: "model",
        data () {
            return {
                modal2: false,
                modal_loading: false
            }
        },
        methods: {
            del () {
                this.modal_loading = true;
                setTimeout(() => {
                    this.modal_loading = false;
                    this.modal2 = false;
                    this.$Message.success('成功删除');
                }, 2000);
            }
        }
    }
</script>

<style scoped>

</style>