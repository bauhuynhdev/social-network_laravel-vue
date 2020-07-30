import Vue from 'vue';
import VueRouter from 'vue-router';
import DefaultLayout from "../layouts/DefaultLayout";
import Home from "../views/Home";
import {hasToken} from "../services/tokenService";

import store from '../store'

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        component: DefaultLayout,
        children: [
            {
                path: '',
                component: Home
            }
        ]
    }
]

const router = new VueRouter({
    routes
});

router.beforeEach((to, from, next) => {
    if (hasToken()) {
        store.dispatch('auth/me')
    }

    next()
})

export default router
