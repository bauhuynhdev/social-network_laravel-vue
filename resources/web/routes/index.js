import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from "../views/Home";
import DefaultLayout from '../layouts/default'
import Auth from "../views/Auth";

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        component: DefaultLayout,
        children: [
            {
                path: '/home',
                component: Home
            },
            {
                path: '/auth',
                component: Auth
            }
        ]
    }
]

export default new VueRouter({
    routes
});
