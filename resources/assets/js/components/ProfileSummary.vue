<template>
  <div class="container text-center ">
    <div class="row full-height justify-content-center align-items-center">
      <div class="row">
        <div class="col-12">
          <h1>Hello.</h1>
        </div>
        <div class="col-12">
          <p>
            My name is Yongky. I am a software developer.<br/>
            Currently live in <a href="https://en.wikipedia.org/wiki/Medan" target="_blank">Medan, North Sumatra, Indonesia.</a><br/>
            This page is still under development 🙏
          </p>
        </div>
        <div class="col-12">
          <a href="https://github.com/yongkylie" target="_blank"><i class="mdi mdi-github-circle" aria-hidden="true"></i></a>
          <a href="https://twitter.com/yongkylie" target="_blank"><i class="mdi mdi-twitter" aria-hidden="true"></i></a>
          <a href="https://instagram.com/yongkyliee" target="_blank"><i class="mdi mdi-instagram" aria-hidden="true"></i></a>
          <a href="https://id.linkedin.com/in/yongkylie" target="_blank"><i class="mdi mdi-linkedin" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    mounted() {
      // console.log('Component Summary mounted.')
    }
  }
</script>

<style>
  .full-height {
    height: 100vh;
  }

  .text-center {
    text-align: center;
  }

  .mdi {
    font-size: 24px;
    margin: 0 5px;
    color: #212529;
  }
</style>