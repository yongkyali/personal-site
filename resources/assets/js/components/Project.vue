<template>
  <div class="container d-flex flex-column justify-content-center">
    <div class="my-5">
      <h3>My works</h3>
      <p>
        I make websites and custom applications. I usually also do the design along the way. From programming perspective, I am familiar with React.JS, Python and PHP.
      </p>
      <p>
        Here are some of projects I’ve done or working on:
        <ul>
          <li>Executive-X</li>
          <li>House Of Leaders</li>
          <li>Telegram PHP SDK</li>
        </ul>
      </p>

      <div class="bottom-navigation">
        <router-link
          :to="{ name: 'about' }"
          class="button button-back"
        >
          <span>Back: about</span>
        </router-link>
        <router-link
          :to="{ name: 'contact' }"
          class="button button-next"
        >
          <span>Next: contact</span>
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    mounted() {
    } 
  }
</script>
