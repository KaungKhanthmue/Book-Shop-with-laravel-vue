import { createRouter, createWebHistory } from 'vue-router';

//admin
import homeAdminIndex from '../components/admin/index.vue';
//pages
import homePageIndex from '../components/home/index.vue';
//not found
import notFound from '../components/noFound.vue';
//auth
import login from '../components/auth/login.vue';
import register from '../components/auth/register.vue';

const routes = [

    {
        path: '/admin/home',
        name: 'adminHome',
        component : homeAdminIndex,
        meta:{
            requiresAuth: true
        }
    },
    {
        path: '/',
        name: 'Home',
        component : homePageIndex,
        meta:{
            requiresAuth: false
        }
    },
    {
        path: '/:pathMatch(.*)*',
        name: 'NotFound',
        component : notFound,
        meta:{
            requiresAuth: false
        }
    },
    {
        path: '/login',
        name: 'Login',
        component : login,
        meta:{
            requiresAuth: false
        }
    },
    {
        path: '/register',
        component : register,
    }
    

];
const router = createRouter({
    history: createWebHistory(),  
    routes,
})

router.beforeEach((to, from) => {
    if (to.meta.requiresAuth && !localStorage.getItem('token')) {
     return {name: 'Login'};
    }
    if (to.meta.requiresAuth == false && localStorage.getItem('token')) {
            return {name: 'adminHome'};
    }
});
export default router;