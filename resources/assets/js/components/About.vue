<template>
  <div class="container d-flex flex-column justify-content-center">
    <div class="my-5">
      <h3>About me</h3>
      <p>I am a software developer based in Medan, Indonesia. My passion in website and mobile-apps design makes me a full-stack software developer. I also speak in public sometimes.</p>
      <p>Currently the CTO of Executive-X, a lively company which focus on digital marketing and influencers.</p>
      <p>
        I like to share my knowledge about programming and software development. If have any questions, don't hesitate to
        <router-link :to="{ name: 'contact' }">drop me a mail</router-link>!
      </p>

      <div class="bottom-navigation">
        <router-link
          :to="{ name: 'landing' }"
          class="button button-back"
        >
          <span>Back: to Home</span>
        </router-link>
        <router-link
          :to="{ name: 'myworks' }"
          class="button button-next"
        >
          <span>Next: my works</span>
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
