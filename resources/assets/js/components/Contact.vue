<template>
  <div class="container d-flex flex-column justify-content-center">
    <div class="my-5">
      <h3>Let's collaborate!</h3>
      <p>Want to collaborate or discuss about system suitable for your company’s need? Or you have any question regarding programming/software development?</p>
      <p>
        <a href="mailto:me@yongky.xyz">Send me an e-mail!</a>
      </p>

      <div class="bottom-navigation">
        <router-link
          :to="{ name: 'myworks' }"
          class="button button-back"
        >
          <span>Back: my works</span>
        </router-link>
        <router-link
          :to="{ name: 'landing' }"
          class="button button-next is-hidden"
        >
          <span>Next: to Home</span>
        </router-link>
      </div>
    </div>
    
  </div>
</template>

<script>
export default {
  mounted() {}
};
</script>
