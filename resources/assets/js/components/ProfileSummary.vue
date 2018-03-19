<template>
  <div class="container banner">
    <div class="row full-height justify-content-center align-items-center">
      <div class="row text-center-sm text-left-md">
        <div class="col-12">
          <h1>Hello.</h1>
        </div>
        <div class="col-12">
          <p>
            My name is Yongky. I am a software developer.<br/>
            I 
            <vue-typer
              :text='["do codes.","swim a lot.","drink coffee.","am a dreamer."]'
              :repeat='Infinity'
              :shuffle='false'
              initial-action='erasing'
              :pre-type-delay='70'
              :type-delay='70'
              :pre-erase-delay='1500'
              :erase-delay='50'
              erase-style='backspace'
              :erase-on-complete='false'
              caret-animation='blink'
            ></vue-typer><br/><br/>
            <span class="maniac-link-group">
              <router-link :to="{ name: 'about' }">About </router-link> /
              <router-link :to="{ name: 'project' }"> Projects </router-link> /
              <router-link :to="{ name: 'contact' }"> Contact </router-link>
            </span>
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
  import { VueTyper } from 'vue-typer'
  export default {
    data : {
      active: false,
    },
    mounted() {
      // console.log('Component Summary mounted.')
    },
    components: {
      VueTyper
    },
    methods: {
      mouseOver() {

      }
    }
  }
</script>

<style lang="scss">
  .mdi {
    font-size: 24px;
    margin: 0 5px;
    color: #212529;
  }
</style>