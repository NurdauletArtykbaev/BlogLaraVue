import VueRouter from 'vue-router'
import AdminHome from './components/admin/AdminHome'
let routes = [
    {
        path: '/home',
        component: AdminHome

    },

]

let router = new VueRouter({
    routes,
    mode:'history'
});

export default router
