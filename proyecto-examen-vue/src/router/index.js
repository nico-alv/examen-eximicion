import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
        path: '/users',
        name: 'UserIndex',
        component: () => import('../views/users/UserIndex.vue')
      },
      {
          path: '/users/create',
          name: 'UserCreate',
          component: () => import('../views/users/UserCreate.vue')
      },
      {
          path: '/users/:id/edit',
          name: 'UserEdit',
          component: () => import('../views/users/UserEdit.vue'),
          props: true,
      },

  ]
})

export default router
