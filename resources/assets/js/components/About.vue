<template>
  <div class="container banner">
    <div class="row full-height justify-content-center align-items-center">
      <div class="row text-center-sm text-left-md">
        <div class="col-12">
          <h1>Yongky Ali</h1>
        </div>
        <div class="col-12">
          <p>Yongky Ali is a software developer who currently lives in <a href="https://en.wikipedia.org/wiki/Medan" target="_blank">Medan, North Sumatra, Indonesia.</a><br/>
            IT Manager at <a href="https://executivemafia.com/about" target="_blank">Executive Mafia</a> and a coffee addict.<br/>
            Most of his time spent sitting and glued into computer screen. He also set aside his time for swimming 3 times a week.<br/>
            He is an open minded and hard-working person.<br/>
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
      
    }
  }
</script>