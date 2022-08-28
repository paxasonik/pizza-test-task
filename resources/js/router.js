import Vue from 'vue';
import {createRouter,createWebHistory} from 'vue-router'

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'Main',
            component: () => import('./views/Main')
        },
        {
            path: '/cart',
            name: 'Cart',
            component: () => import('./views/Cart')
        },
        {
            path: '/:pathMatch(.*)*',
            name: 'NotFound',
            component: () => import('./views/NotFound')
        }
    ]
})
export default router;
