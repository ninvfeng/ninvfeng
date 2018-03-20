<template>
  <div id="app">
    <div class="header">Ninvfeng Blog</div>
    <router-view/>
  </div>
</template>

<script>
export default {
  name: 'App'
}
</script>
<style>
  body{
    padding:0;
    margin:0;
    background:#eee;
  }

  #app{
    margin-bottom:80px;
  }

  .header{
    height:80px;
    position:fixed;
    top:0;
    left:0;
    width:100%;
    text-align:center;
    line-height:80px;
    font-size:38px;
    border:1px solid #ccc;
    background:#f3f3f3;
  }
</style>
