<template>
  <div class="container">
    <div class="row full-height justify-content-center align-items-center">
      <div class="row text-center-sm">
        <div class="col-12">
          <h1>Let's get in touch!</h1>
        </div>
        <div class="col-12">
          <p>For business inquiries, you can send a letter to:</p>
          <p><span style="margin-right: .5rem;"><i style="font-size: 1rem;" class="mdi mdi-email" aria-hidden="true"></i>:</span><a href="mailto:yongkyliee@gmail.com">yongkyliee@gmail.com</a></p>
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
      
    }
  }
</script>