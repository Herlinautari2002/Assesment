import { createRouter, createWebHistory } from "vue-router";

import ProductIndex from '../Component/produk/index.vue'
import ProductCreate from '../Component/produk/Create.vue'
import ProductEdit from '../Component/produk/edit.vue'

const routes = [
    {
        path:'/product_vue/',
        component: ProductIndex,
    },
    {
        path:'/product_vue/create',
        component: ProductCreate,
    },
    {
        path:'/product_vue/edit/:id',
        component: ProductEdit,
        props: true,
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router