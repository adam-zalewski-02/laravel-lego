<script setup>
import { RouterView } from 'vue-router'
import Header from './components/Header.vue';
</script>

<template>
  <div class="app">
    <Header />
    <div class="content">
      <RouterView />
    </div>
  </div>
</template>

<style scoped>
.app {
  width: 60vw;
  height: 100vh;
  background-color: rgb(18, 18, 18);
}

.content {
  width: 100%;
  background-color: rgb(18, 18, 18);
}

</style>
