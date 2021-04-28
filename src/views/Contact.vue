<template>
<div class="wrapper">
    <section class="intro">
      <h1 class="text-3xl relative">Get in Touch</h1>
      <p class="text-blue relative">Lorum ipsum dulce et decorum est, amet, consiccteur.</p>
    </section>
    <section class="contact flex mx-auto w-full flex-col pt-0 sm:w-10/12 sm:max-w-xl xl:flex-row xl:max-w-7xl 2xl:max-w-screen-2xl">
      <section class="form bg-blue rounded-sm flex flex-col mb-5 xl:w-5/12 xl:h-full xl:mb-0 xl:pr-10">
        <label class="text-left" for="name">Name *</label>
        <input class="mb-5 border-sm" v-model="name" placeholder="Your Name" name="name" required>
        <label class="text-left" for="email">Email *</label>
        <input class="mb-5" v-model.trim="email" placeholder="Email" name="email" type="email" required>
        <label class="text-left border-sm" for="phone">Phone</label>
        <input class="mb-5" v-model="phone" placeholder="Telephone" name="phone" type="tel">
        <label class="text-left border-sm" for="message">Message *</label>
        <textarea class="mb-5 border-sm" v-model.trim="message" placeholder="Message" name="message" rows="5"></textarea>
        <button class="bg-dark-blue text-white border-sm self-end">Send</button>
      </section>
      <section class="relative flex rounded-sm bg-purple flex-col xl:w-7/12 xl:h-full xl:rounded-l-lg xl:right-5 2xl:flex-row 2xl:items-center">

      <iframe
        width="600"
        height="450"
        style="border:0"
        loading="lazy"
        allowfullscreen
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDv3SVe_ZOXbddUg-2a538ySO0LkAYwGsA
          &q=7+Rippenden+Avenue">
      </iframe>

        <div class="2xl:flex-col 2xl:ml-10">
          <div class="flex text-left mb-5 mt-10 items-center 2xl:mb-10">
            <img class="mr-5 xl:w-6/12" src="../assets/location.png" alt="Location Icon" />
            <p>
              Nicolson Therapy <br/>
              Chorlton <br/>
              M21 9SS <br/>
            </p>
          </div>
          <div class="flex text-left mb-5 2xl:mb-10">
            <img class="mr-5" src="../assets/email.png" alt="Email Icon" />
            <a mailto="nicola@nicolson-therapy.co.uk">nicola@nicolson-therapy.co.uk</a>
          </div>
          <div class="flex text-left mb-5 2xl:mb-10">
            <img class="mr-5" src="../assets/telephone.png" alt="Telephone Icon" />
            <a tel="">+44 555 555 555</a>
          </div>
        </div>
      </section>
    </section>
  </div>
</template>

<style scoped>
  textarea {
    resize: none;
  }
  input, textarea {
    padding: 0.875rem;
    transition: 0.3s ease-in-out;
  }
  input:focus, textarea:focus {
    background-color: #DBCDE3;
    outline: none;
  }
  label {
    margin-bottom: 0.875rem;
  }
  button {
    width: 125px;
    height: 51px;
  }
  img {
    height: 35px;
    width: 35px;
  }
  #map {
    height: 400px;
    width: 100%;
  }

  @media (min-width: 1280px) {
    .contact section {
      height: 650px;
    }
    .map {
      max-height: 500px;
    }
  }
</style>


<script>
import { defineComponent } from '@vue/composition-api'

export default defineComponent({
  components: {
  }
})
</script>
