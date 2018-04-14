import Vue from "vue"
import VueRouter from "vue-router"
//引入组件
import Select from '../components/page-select'
import Content from '../components/page-content'
import List from '../components/page-list'
//告诉vue使用vueRouter
Vue.use(VueRouter)

const routes = [
    { path:'/Content',component: Content },
    { path:'/Select',component: Select },
    { path:'/',component:List }
]

const router = new VueRouter({
    routes
})
export default router