<template>
  <img alt="Nicola Nicolson" src="../assets/headshot.png" class="rounded-full headshot mx-auto mt-10 absolute z-10 inset-x-0 md:mr-0 md:ml-4 lg:hidden" />
  <section class="intro flex flex-col mx-auto relative bg-purple w-10/12 mt-56 w-6/12 md:w-9/12 md:mt-20 md:pl-60 md:rounded-l-full md:rounded-r-3xl lg:mb-20 lg:hidden">
    <h1 class="text-3xl mb-3 mt-32 b text-left md:mt-0">Nicola Nicolson</h1>
    <p class="text-left ml-5">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim 
      ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
      in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
      mollit anim id est laborum
    </p>
  </section>
  <section class="intro hidden mt-28 mx-auto relative bg-purple w-10/12 max-w-4xl lg:flex justify-end rounded-l-full left-5 xl:w-9/12 2xl:w-8/12 2xl:max-w-6xl">
    <img alt="Nicola Nicolson" src="../assets/headshot.png" class="hidden headshot-lg rounded-full absolute z-10 lg:inline w-4/12 -left-5 -top-12" />
    <div class="w-8/12 flex flex-col lg:w-9/12 lg:pl-24 2xl:pl-6">
      <h1 class="text-3xl mb-3 mt-32 b text-left md:mt-0">Nicola Nicolson</h1>
      <p class="text-left ml-5">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim 
        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
        mollit anim id est laborum
      </p>
    </div>
  </section>
  <section class="relative bg-blue ml-auto flex md:justify-center mt-20 xl:w-10/12 xl:rounded-sm xl:mx-auto xl:max-w-6xl xl:left-16 2xl:w-9/12 ">
    <div class="flex flex-col lg:w-4/6 justify-center lg:pr-10 xl:w-8/12">
      <h3 class="text-2xl mb-3 text-left lg:text-right">What is Therapy?</h3>
      <p class="text-left ml-5 lg:text-right lg:mr-5">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
      </p>
      <button class="bg-dark-blue text-white inline-block mt-5 mx-auto lg:mx-0 lg:self-end lg:mr-5">
        <router-link to="/">Read More</router-link>
      </button>
    </div>
    <img class="hidden lg:inline-block w-2/6 max-w-xs xl:w-4/12 rounded-sm" alt="" src="../assets/tuscany.jpg" />
  </section>
  <section class="relative bg-purple flex md:justify-center xl:w-10/12 xl:rounded-sm xl:mx-auto xl:right-16 2xl:max-w-6xl"> 
    <img class="hidden lg:inline-block w-2/6 max-w-xs rounded-sm xl:w-4/12 " alt="" src="../assets/tuscany.jpg" />
    <div class="flex flex-col lg:w-4/6 justify-center lg:pl-10 xl:w-8/12">
      <h3 class="text-2xl text-left mb-3">Therapy I Provide.</h3>
      <p class="text-left ml-5">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
      </p>
      <button class="bg-dark-blue text-white inline-block mt-5 mx-auto lg:mx-0 lg:ml-5">
        <router-link to="/">Read More</router-link>
      </button>
    </div>
  </section>
  <section class="relative bg-blue flex ml-auto md:justify-center xl:w-10/12 xl:rounded-sm xl:mx-auto 2xl:w-9/12 xl:left-16 2xl:max-w-6xl">
    <div class="flex flex-col lg:w-4/6 justify-center lg:pr-10 xl:w-8/12">
      <h3 class="text-2xl mb-3 text-left lg:text-right">Lorum Ipsum Dulce.</h3>
      <p class="text-left ml-5 lg:text-right lg:mr-5">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
      </p>
      <button class="bg-dark-blue text-white inline-block mt-5 mx-auto lg:mx-0 lg:self-end lg:mr-5">
        <router-link to="/">Read More</router-link>
      </button>
    </div>
    <img class="hidden lg:inline-block w-2/6 max-w-xs rounded-sm xl:w-4/12" alt="" src="../assets/tuscany.jpg" />
  </section>
</template>