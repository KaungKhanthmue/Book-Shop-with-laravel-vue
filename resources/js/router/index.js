import { createRouter, createWebHistory } from 'vue-router';

//admin
import conHome from '../components/contributor/home.vue';
import profileindex from '../components/contributor/profile.vue';

//pages
import homePageIndex from '../components/home/index.vue';
import friendList from '../components/home/friendLists.vue';
//not found
import notFound from '../components/noFound.vue';
//auth
import login from '../components/auth/login.vue';
import register from '../components/auth/register.vue';

const routes = [

    {
        path: '/contributor/home',
        name: 'Contributor Home',
        component : conHome,
        meta:{
            requiresAuth: false
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
        path: '/friendlist',
        name: 'FriendList',
        component: friendList,
        meta:{
            requiresAuth: false
        }
    },
    {
        path: '/profile',
        name: 'Profile',
        component : profileindex,
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
        name: 'Register',
        component : register,
        met: {
            requiresAuth: false
        }
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
    // if (to.meta.requiresAuth == false && localStorage.getItem('token')) {
    //         return {name: 'adminHome'};
    // }
});
export default router;