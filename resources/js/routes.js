import VueRouter from 'vue-router'
import AdminHome from './components/admin/AdminHome.vue'
import CategoryList from './components/admin/category/List.vue'
import CategoryNew from './components/admin/category/New'
import CategoryView from './components/admin/category/View'
let routes = [
    {
        path: '/home',
        component: AdminHome
    },
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

];

let router = new VueRouter({
    mode:'history',
    routes
});

export default router;
