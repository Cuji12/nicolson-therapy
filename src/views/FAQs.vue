<template>
  <h1 class="text-3xl mt-4 mb-3">FAQ</h1>
  <section class="flex flex-col max-w-5xl mx-auto">
    <div class="flex items-start faq open p-5">
      <div class="w-11/12 sm:w-11/12">
        <h2 class="text-2xl text-left mb-2">Lorum Ipsum dulce et?</h2>
        <p class="text-left ml-5">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
          non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
        </p>
      </div>
      <img class="w-1/12 chevron" src="../assets/chevron.svg">
    </div>
    <div class="flex closed items-start faq p-5">
      <div class="w-11/12">
        <h2 class="text-2xl text-left mb-2">Lorum Ipsum dulce et?</h2>
        <p class="text-left ml-5">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
          non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
        </p>
      </div>
      <img class="w-1/12 chevron" src="../assets/chevron.svg">
    </div>
    <div class="flex closed items-start faq p-5">
      <div class="w-11/12">
        <h2 class="text-2xl text-left mb-2">Lorum Ipsum dulce et?</h2>
        <p class="text-left ml-5">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
          non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
        </p>
      </div>
      <img class="w-1/12 chevron" src="../assets/chevron.svg">
    </div>
    <div class="flex closed items-start faq p-5">
      <div class="w-11/12">
        <h2 class="text-2xl text-left mb-2">Lorum Ipsum dulce et?</h2>
        <p class="text-left ml-5">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
          non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
        </p>
      </div>
      <img class="w-1/12 chevron" src="../assets/chevron.svg">
    </div>
    <div class="flex closed items-start faq p-5">
      <div class="w-11/12">
        <h2 class="text-2xl text-left mb-2">Lorum Ipsum dulce et?</h2>
        <p class="text-left ml-5">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
          non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
        </p>
      </div>
      <img class="w-1/12 chevron" src="../assets/chevron.svg">
    </div>
  </section>
    
</template>
<style scoped>
  .faq {
    cursor: pointer;
    transition: 0.3s ease-in-out;
  }
  .faq.closed p {
    display: none;
  }
  .faq.closed .chevron {
    transform: rotate(180deg);
  }
  .faq.open p {
    display: block;
  }
  .faq.open:nth-child(odd) {
    background: #CBE5E7;
  }
  .faq.open:nth-child(even) {
    background: #DBCDE3;
  }
  .faq.closed:nth-child(odd) {
    background: #F5F5F5;
  }
  .faq.closed:nth-child(even) {
    background: #FFFFFF;
  }
  .chevron {
    height: 35px;
    width: 35px;
  }
</style>