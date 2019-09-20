<template>
  <div id="app">

      <Home></Home>


  </div>
</template>

<script>
  import Home from './components/Resume'



export default {
  name: 'app',
  components: {
    Home

  }
}
</script>

<style>
  @import "assets/css/base.css";
    #app {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        font-family: STKaiti;
    }

</style>
