<template>
  <div class="container banner">
    <div class="row full-height justify-content-center align-items-center">
      <div class="row text-center-sm text-left-md">
        <div class="col-12">
          <h1>Yongky Ali</h1>
          <p>
            Yongky Ali is a software developer who currently lives in <a href="https://en.wikipedia.org/wiki/Medan" target="_blank">Medan, North Sumatra, Indonesia.</a>
          </p>
          <p>
            He currently work as IT Manager at <a href="https://executivemafia.com/about" target="_blank">Executive Mafia</a>.<br/>
            Most of his time spent sitting and glued into computer screen while drinking warm coffee.<br/>
            Yongky make websites, bots, and some other software development stuff.<br/>
            His hobby is swimming (although he is not a good swimmer).<br/>
            He is an open-minded, hard working and always driven to create something new type of person.<br/>
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