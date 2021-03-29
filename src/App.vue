<template>
  <div class="menu hidden bg-dark-blue h-screen w-screen z-50 px-10" id="menu">
    <div class="menu__exit" id="exit-menu" @click="closeMenu">
    </div>
    <ul class="text-white flex flex-col h-screen justify-center">
      <li class="mb-10 text-2xl font-bold">
        <router-link to="/">Home</router-link> 
      </li>
      <li class="mb-10 text-2xl font-bold">
        <router-link to="/about">About</router-link>
      </li>
      <li class="mb-10 text-2xl font-bold">
        <router-link to="/blog">Blog</router-link> 
      </li>
      <li class="mb-10 text-2xl font-bold">
        <router-link to="/contact">Conctact</router-link>
      </li>
      <li class="mb-10 text-2xl font-bold">
        <router-link to="/FAQs">FAQs</router-link> 
      </li>
      <li class="text-2xl font-bold">
        <router-link to="/testimonials">Testimonials</router-link>
      </li>
    </ul>
  </div>
  <header id="header" class="bg-dark-blue py-4 px-10 flex items-center justify-between 2xl:px-32">
    <img alt="Nicolson Therapy Logo" height="150" width="100" src="./assets/logo.png" />
    <div class="md:hidden flex flex-col w-1/12 cursor-pointer burger-menu" id="burger" @click="openMenu">
      <hr class="mb-2">
      <hr class="mb-2">
      <hr class="">
    </div>
    <nav id="nav" class="flex items-center justify-between pl-10 text-white font-medium hidden md:block">
      <router-link to="/">Home</router-link> 
      <router-link to="/about">About</router-link>
      <router-link to="/blog">Blog</router-link> 
      <router-link to="/contact">Conctact</router-link>
      <router-link to="/FAQs">FAQs</router-link> 
      <router-link to="/testimonials">Testimonials</router-link>
    </nav>
  </header>
  <router-view/>
  <footer id="#footer" class="flex bg-dark-blue text-white text-left flex-wrap mt-10 justify-center">
     <div class="flex flex-col w-6/12 mb-5 lg:w-auto lg:mx-5">
      <p class="text-lg font-medium">Quick Links</p>
      <ul class="underline">
        <li>
          <router-link to="/">Home</router-link> 
        </li>
        <li>
          <router-link to="/about">About</router-link>
        </li>
        <li>
          <router-link to="/blog">Blog</router-link> 
        </li>
        <li>
          <router-link to="/testimonials">Testimonials</router-link> 
        </li>
      </ul>
    </div>
    <div class="flex flex-col w-6/12 mb-5 lg:w-auto lg:mx-5">
      <p class="text-lg font-medium">Get in Touch</p>
      <a mailto="nicolson@nicolson-therapy.co.uk">nicolson@nicolson-therapy.co.uk</a>
      <a tel="">555 5555 555</a>
    </div>
    <div class="flex flex-col w-6/12 lg:w-auto lg:mx-5">
      <p class="text-lg font-medium">Help and Advice</p>
      <ul class="underline">
         <li>
          <router-link to="/contact">Contact</router-link> 
        </li>
        <li>
          <router-link to="/FAQs">FAQs</router-link>
        </li>
      </ul>
    </div>
    <div class="flex flex-col w-6/12 lg:w-auto lg:mx-5">
      <!-- <img alt="Nicolson Therapy Logo" src="./assets/logo.png" height="150" width="100" class="" /> -->
      <p class="text-lg font-medium">Contract</p>
      <router-link class="underline" to="/therapy-contract">Therapy Contract</router-link>
      <p class="">© 2021 Nicolson Therapy</p>
    </div>
    <p class="text-grey text-center mt-10 w-full">Nicolson Therapy Ltd a company incorporated and registered in England and Wales with company number LORUM whose registered office is at 7 Rippenden, Manchester, England, M21 9SS</p>
  </footer>
</template>

<script>
import { defineComponent } from '@vue/composition-api'

export default defineComponent({
  methods: {
    openMenu() {
      document.getElementById('body').setAttribute('style', 'height: 100%; overflow: hidden;');
      document.getElementById('menu').setAttribute('style', 'display: block;');
    },
    closeMenu() {
      document.getElementById('body').setAttribute('style', 'height: unset; overflow: unset;');
      document.getElementById('menu').setAttribute('style', 'display: none;');
    }
  },
  setup() {
    
  },
})
</script>


<style>
#app {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  background-image: url("assets/background.svg");
}
#header {
  /* height: 100px; */
}
#nav a:not(:last-child) {
  @apply mr-3;
}
#nav a:hover {
  @apply transition-colors;
  color: #DBCDE3;
}
#footer {
  background-color: #37387D;
}
.burger-menu hr {
  border-width: 1px;
  border-radius: 2px;
  width: 30px;
}
.menu {
  opacity: 0.8;
}
.menu a:hover {
  color: #DBCDE3;
}
.menu__exit {
    position: absolute;
    top: 20px;
    right: 35px;
    color: white;
    font-size: 58px;
    cursor: pointer;
}
.menu__exit:after {
  display: inline-block;
  content: "\00d7";
}
</style>