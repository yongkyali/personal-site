<template>
  <div class="container">
    <div class="row full-height justify-content-center align-items-center">
      <div class="row text-center-sm">
        <div class="col-12">
          <h1>This page is currently under development 🙏</h1>
        </div>
        <div class="col-12">
          <p>
            But no worries! It's coming real soon! 😄
          </p>
        </div>
        <div class="col-12">
          <router-link :to="{ name: 'landing' }">Go Back </router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    mounted() {
      console.log('Project page mounted!')
    } 
  }
</script>