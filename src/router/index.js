import { createWebHistory, createRouter } from "vue-router";
import Home from "../views/Home.vue";
import About from "../views/About.vue";
import Contact from "../views/Contact.vue";
import Blog from "../views/Blog.vue";
import FAQs from "../views/FAQs.vue";
import Testimonials from "../views/Testimonials.vue";

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/about",
    name: "About",
    component: About,
  },
  {
    path: "/contact",
    name: "Contact",
    component: Contact,
  },
  {
    path: "/blog",
    name: "Blog",
    component: Blog,
  },
  {
    path: "/FAQs",
    name: "FAQs",
    component: FAQs,
  },
  {
    path: "/testimonials",
    name: "Testimonials",
    component: Testimonials,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;