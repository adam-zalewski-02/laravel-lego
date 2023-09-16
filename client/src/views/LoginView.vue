<script setup>
import LoginRegister from '@/components/LoginRegister.vue';
</script>

<template>
  <div class="login-register">
    <div class="card">
      <LoginRegister />
    </div>
  </div>
</template>

<script>
export default {
  components: { LoginRegister },
};
</script>

<style scoped>
.login-register {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.card {
  width: 40%;
  padding: 20px;
  border-radius: 4px;
  background-color: rgb(30, 30, 30);
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
</style>
