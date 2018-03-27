<template>
  <div class="container">
    <div class="row full-height justify-content-center align-items-center">
      <div class="row text-center-xs text-left-sm">
        <div class="col-12" style="margin: 150px 0">
          <h5>Executive Mafia</h5>
          <a href="https://executivemafia.com" target="_blank">www.executivemafia.com</a>
          <p>
            Executive Mafia website, build with PHP Laravel Framework.<br/>
            Hosted in Virtual Private Server, Amazon S3 Storage, and Mailgun ESP for E-Mail Services.
          </p>

          <h5>Executive Media</h5>
          <a href="https://executivemafia.com" target="_blank">www.executivemedia.group</a>
          <p>
            Company profile for PT. Eksekutif Media Utama, build with PHP Laravel Framework.
          </p>

          <h5>Jasmine Telegram Bot</h5>
          <a href="https://t.me/jesmin_bot" target="_blank">Jasmine Telegram</a>
          <p>
            Jasmine is a bot created as a personal assistant for Executive Mafia.<br/>
            Jasmine assigned as operator to do complex tasks such as doing rounds and work with Instagram API.<br/>
            Jasmine was build with PHP Laravel framework.
          </p>

          <h5>This website.</h5>
          <a href="https://yongky.xyz" target="_blank">www.yongky.xyz</a>
          <p>
            This website is made by myself, using  PHP Laravel as server-side and Vue.JS as front-end.<br/>
            This website intentionaly made for educational purpose. Laravel will be changed to Python Django in the near future.<br/>
            Laravel version for this website is open sourced, you can fork it <a href="https://github.com/yongkylie/personal-site" target="_blank">here</a> and make it yours. :)
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
