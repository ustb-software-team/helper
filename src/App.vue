<template>
  <div id="app" class="container">
      <Head v-bind:childLogin="canSee"></Head>
      <router-view v-on:hiddenButton="hiddenChild"></router-view>
  </div>

</template>

<script>
    import Head from './components/admin-head'
    export default {
      name: 'app',
      data:function () {
        return {
            canSee:true
        }
      },
      components:{
          Head
      },
      methods:{
          hiddenChild:function (a) {
              this.canSee = a;
          }
      }
    }
</script>

<style lang="scss">

</style>
