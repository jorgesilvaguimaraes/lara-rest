
import Home from './components/Home.vue';
import Login from './components/auth/Login.vue';

export const routes = [
    {
        path : '/',
        name : 'home',
        component : Home,
        meta : {
            requiresAuth : true
        }
    },
    {
        path : '/login',
        name : 'login',
        component : Login
    }

]