<script setup>
import { BASE_URL } from '@/config';
</script>

<template>
  <div class="fetch-lego-set">
    <h2 class="fetch-lego-set__title">Fetch Lego Set</h2>
    <form @submit.prevent="fetchSet" class="fetch-lego-set__form">
      <input v-model="setNumber" type="number" placeholder="Set Number" required class="fetch-lego-set__input">
      <button type="submit" class="fetch-lego-set__button">Fetch Set</button>
    </form>

    <div v-if="currentSet">
      <h3>Set Number: {{ currentSet.set_number }}</h3>
      <h3>Name: {{ currentSet.translations[0].name }}</h3>
      <h3>Price: {{ currentSet.price }}</h3>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      setNumber: '',
      currentSet: null,
    };
  },
  methods: {
    async fetchSet() {
      try {
        const response = await fetch(`${BASE_URL}sets/${this.setNumber}`);
        if (response.ok) {
          const responseData = await response.json();
          this.currentSet = responseData.data;
          console.log('Set fetched successfully', this.currentSet);
        } else {
          console.error('Failed to fetch set');
        }
      } catch (error) {
        console.error(error);
      }
    },
  },
};
</script>

<style scoped>
.fetch-lego-set {
  width: 100%;
  height: 100%;

  display: flex;
  flex-direction: column;
  align-items: center;
}

.fetch-lego-set__title {
  font-size: 1.5rem;
  margin-bottom: 1rem;
}

.fetch-lego-set__form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.fetch-lego-set__input {
  padding: 0.5rem;
  margin-bottom: 1rem;
  width: 200px;
}

.fetch-lego-set__button {
  padding: 0.5rem 1rem;
  background-color: rgb(195, 143, 254);
  color: #000000;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
