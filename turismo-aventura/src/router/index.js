import { createRouter, createWebHistory } from 'vue-router'
import TurismoAventura from '@/components/TurismoAventura.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: TurismoAventura,
    }
  ],
})

export default router
