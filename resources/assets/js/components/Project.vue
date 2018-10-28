<template>
  <div class="container">
    <div class="row full-height justify-content-center align-items-center">
      <div class="row text-center-xs text-left-sm">
        <div class="col-12" style="margin: 150px 0">
          <h1>Projects</h1>
          <p>
            Yongky currenly do development, managing and planning as IT Manager at
            <a href="https://www.executivemedia.group" target="_blank">Executive Media</a>.
            <br />
            Here are some reference the projects:
            <li>
              <a href="https://www.executivemafia.com" target="_blank">Executive Mafia</a>
              : Influencer Network for Instagram.
            </li>
            <li>
              <a href="https://executive-cart.com" target="_blank">Executive Cart</a>
              : Influencer Marketplace for Instagram.
            </li>
            <li>
              <a href="https://www.executivemedia.group" target="_blank">Executive Media</a>
              : a company profile.
            </li>
            <li>
              <a href="https://t.me/jesmin_bot" target="_blank">Jasmine Bot</a>
              : Telegram bot as an assistant to Executive Mafia.
            </li>
            <li>
              This website.
            </li>
          </p>

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

<style>
.row {
  margin: 0 !important;
}
</style>
