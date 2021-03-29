<template>
  <section class="intro">
    <h1 class="text-3xl">Blog</h1>
  </section>
  <div class="wrapper mx-25">
    <div class="blog-post p-5 max-w-md mx-auto rounded-sm lg:max-w-5xl lg:flex">
      <img class="rounded-sm blog-post-img mx-auto lg:object-cover" src="../assets/tuscany.jpg" alt="Tuscany" />
      <div class="flex flex-col pl-5 lg:justify-center">
        <h1 class="text-3xl mt-5 mb-2 self-start">Fred is stupid lol</h1>
        <p class="text-left ml-5">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
          quis nostrud exercitation ullamco laboris... 
          </p>
          <router-link class="block blog-button bg-dark-blue text-white p-3 rounded-sm mt-5 self-center lg:self-start lg:ml-5" to="/blog/fred-is-stupid-lol">Read More</router-link> 
      </div>
    </div>
  </div>
</template>
<style scoped>
  .blog-post:nth-child(odd) {
    background-color: #CBE5E7;
  }
  .blog-post:nth-child(odd) {
    background-color: #DBCDE3;
  }
  .blog-post-img {
    max-width: 400px;
    width: 100%;
  }
  .blog-post {
  }
</style>