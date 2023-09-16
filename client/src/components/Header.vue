<script setup>
import { RouterLink } from 'vue-router'
</script>

<template>
  <header>
    <nav>
      <RouterLink to="/">Home</RouterLink>
      <RouterLink to="/login">Login</RouterLink>
      <RouterLink to="/view">Front Office</RouterLink>
      <RouterLink to="/edit">Back Office</RouterLink>
    </nav>
  </header>
</template>

<script>
export default {
  components: {
    RouterLink
  }
};
</script>

<style scoped>
header {
  width: 100%;
  background-color: rgb(30, 30, 30);
}

nav {
  display: flex;
  justify-content: center;
}

nav a {
  padding: 1rem;
}
</style>
