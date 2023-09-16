<script setup>
import DeleteLegoSet from '@/components/DeleteSetForm.vue';
import AddLegoSet from '@/components/AddSetForm.vue';
import LoginRegister from '@/components/LoginRegister.vue';
import UpdateLegoSet from '@/components/UpdateSetForm.vue';
import SetsByTheme from '@/components/SetsByTheme.vue';
import SetsByNumber from '@/components/SetBySetNumber.vue'
</script>

<template>
  <div class="back-office">
    <div class="card">
      <h1>Back Office</h1>
    </div>
    <div class="card">
      <AddLegoSet />
    </div>
    <div class="card">
      <DeleteLegoSet />
    </div>
    <div class="card">
      <UpdateLegoSet />
    </div>
    <div class="card">
      <SetsByTheme />
    </div>
    <div class="card">
      <SetsByNumber />
    </div>
  </div>
</template>

<script>
export default {
  components: { LoginRegister },
};
</script>

<style scoped>
.back-office {
  padding: 1rem;

  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  row-gap: 1rem;
  column-gap: 1rem;

  color: rgb(255, 255, 255);
}

.card {
  width: 40%;
  padding: 20px;
  border-radius: 4px;
  background-color: rgb(30, 30, 30);
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
</style>
