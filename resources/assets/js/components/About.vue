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
            He currently work as IT Manager at <a href="https://executivemafia.com/about" target="_blank">
            Executive Mafia</a>.
            <br/>
            Yongky build websites, bots, and some other software development stuff
            everyday as a fulltime job at office.
            <br />
            He spend some time contributing to open source projects at Github and stackoverflow.
            <br/>
            He is an open-minded guy and hard working.
            <br />
            His hobbies are swimming and doing codes.
            <br/>
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