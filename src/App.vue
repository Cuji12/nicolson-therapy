<template>
  <nav id="nav" class="">
    <img alt="Nicolson Therapy Logo" src="" />
    <div class="">
      <router-link to="/">Home</router-link> |
      <router-link to="/about">About</router-link>
      <router-link to="/blog">Blog</router-link> |
      <router-link to="/contact">Conctact</router-link>
      <router-link to="/FAQs">FAQs</router-link> |
      <router-link to="/testimonials">Testimonials</router-link>
    </div>
  </nav>
  <router-view/>
  <footer>
    <div>
      <img alt="Nicolson Therapy Logo" src="" />
      <router-link to="/therapy-contract">Therapy Contract</router-link>
      <p>© 2021 Nicolson Therapy</p>
    </div>
    <div>
      <p>Get in Touch</p>
      <a mailto="nicolson@nicolson-therapy.co.uk">nicolson@nicolson-therapy.co.uk</a>
      <a tel="">555 5555 555</a>
    </div>
    <div>
      <p>Help and Advice</p>
      <p>FAQ</p>
      <p>Contact</p>
    </div>
    <div>
      <p>Quick Links</p>
      <p>Home</p>
      <p>About</p>
      <p>Blog</p>
      <p>Testimonials</p>
    </div>
    <p>Nicolson Therapy Ltd a company incorporated and registered in England and Wales with company number LORUM whose registered office is at 7 Rippenden, Manchester, England, M21 9SS</p>
  </footer>
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>