import { createRouter, createWebHistory } from 'vue-router';

import HomeView from '@/views/HomeView.vue';
import RegisterView from '@/views/RegisterView.vue';
import LoginView from '@/views/LoginView.vue';
import ConnetionsView from '@/views/ConnetionsView.vue';
import TermsAndConditionsView from '@/views/TermsAndConditionsView.vue';
import PrivacyAndPolicyView from '@/views/PrivacyAndPolicyView.vue';

import TanksView from '@/views/ProductsView.vue/TanksView.vue';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/home',
      name: 'home',
      component: HomeView,
    },
    {
      path: '/register',
      name: 'register',
      component: RegisterView,
    },
    {
      path: '/login',
      name: 'login',
      component: LoginView,
    },
    {
      path: '/connection',
      name: 'connection',
      component: ConnetionsView,
    },
    {
      path: '/terms',
      name: 'terms',
      component: TermsAndConditionsView,
    },
    {
      path: '/policy',
      name: 'poliyc',
      component: PrivacyAndPolicyView,
    },

    {
      path: '/tanks',
      name: 'tanks',
      component: TanksView,
    },
  ],
});

export default router;
