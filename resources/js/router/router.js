import {
    createWebHistory,
    createRouter,
} from "vue-router";

const routes = [
    {
        path: '/',
        name: 'home',
        component: () => import ('@/js/pages/HomeView.vue')
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export {router}
