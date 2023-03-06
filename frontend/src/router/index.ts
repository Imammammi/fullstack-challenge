import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";
import UserView from "../views/UserView.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "home",
      component: HomeView,
      meta: {
        title: "Home",
      },
    },
    {
      path: "/weather/:user",
      name: "userView",
      component: UserView,
      meta: {
        title: "User Weather",
      },
    },
  ],
});

router.beforeEach((to, from, next) => {
  document.title = `${
    to.meta.title
  } | Weather House`;
  next();
});

export default router;
