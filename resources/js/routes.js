import VueRouter from 'vue-router'
import AdminHome from './components/admin/AdminHome'
import Ex from './components/ExampleComponent'
let routes = [
    {
        path: '/home',
        component: AdminHome

    },
    {
        path: '/posts',
        component: Ex

    },

]

let router = new VueRouter({
    routes,
    mode:'history'
});

export default router
