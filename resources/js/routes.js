import VueRouter from 'vue-router'
import AdminHome from './components/admin/AdminHome'
import CategoryList from './components/admin/category/List'
import CategoryNew from './components/admin/category/New'
import CategoryView from './components/admin/category/View'
let routes = [
    {
        path: '/home',
        component: AdminHome

    },
    // {
    //     path: '/posts',
    //     component: Ex
    //
    // },
    {
        path: '/category-list',
        component: CategoryList

    },
    {
        path: '/add-category',
        component: CategoryNew

    },
    {
        path: '/category-view',
        component: CategoryView

    },

]

let router = new VueRouter({
    routes,
    mode:'history'
});

export default router
