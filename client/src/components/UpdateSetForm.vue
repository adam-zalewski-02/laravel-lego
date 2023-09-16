<script setup>
import { BASE_URL } from '@/config';
</script>

<template>
  <div class="change-lego-set">
    <h2 class="change-lego-set__title">Change Lego Set</h2>
    <form @submit.prevent="updateSet" class="change-lego-set__form">
      <input v-model="setNumber" type="number" placeholder="Set Number" required class="change-lego-set__input">
      <button type="button" @click="fetchSet" class="change-lego-set__button">Fetch Set</button>

      <div v-if="currentSet">
        <input v-model="currentSet.price" type="number" step="0.01" placeholder="Price" required class="change-lego-set__input">
        <input v-model="currentSet.piece_count" type="number" placeholder="Piece Count" required class="change-lego-set__input">
        <input v-model="currentSet.minifigure_count" type="number" placeholder="Minifigure Count" required class="change-lego-set__input">
        <input v-model="currentSet.year" type="number" placeholder="Year" required class="change-lego-set__input">
        
        <h3>Theme:</h3>
        <select v-model="currentSet.theme.code" class="change-lego-set__input">
          <option v-for="theme in themes" :value="theme.code" :key="theme.code">{{ theme.name }}</option>
        </select>

        <h3>English Translation:</h3>
        <input v-model="currentSet.translations[0].name" type="text" placeholder="Name" required class="change-lego-set__input">
        <input v-model="currentSet.translations[0].description" type="text" placeholder="Description" required class="change-lego-set__input">

        <h3>Dutch Translation:</h3>
        <input v-model="currentSet.translations[1].name" type="text" placeholder="Name" required class="change-lego-set__input">
        <input v-model="currentSet.translations[1].description" type="text" placeholder="Description" required class="change-lego-set__input">

        <button type="submit" class="change-lego-set__button">Update Set</button>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      setNumber: '',
      currentSet: null,
      themes: []
    };
  },
  mounted() {
    this.fetchThemes();
  },
  methods: {
    async fetchThemes() {
      try {
        const response = await fetch(`${BASE_URL}themes`);
        if (response.ok) {
          const responseData = await response.json();
          this.themes = responseData.data;
          console.log('Themes fetched successfully', this.themes);
        } else {
          console.error('Failed to fetch themes');
        }
      } catch (error) {
        console.log(error);
      }
    },
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
  async updateSet() {
    try {
      const response = await fetch(`${BASE_URL}sets/${this.setNumber}`, {
        method: 'PUT',
        credentials: 'include',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          theme_code: this.currentSet.theme.code,
          price: parseFloat(this.currentSet.price),
          piece_count: parseInt(this.currentSet.piece_count),
          minifigure_count: parseInt(this.currentSet.minifigure_count),
          year: parseInt(this.currentSet.year),
          translations: [
            {
              language: 'en',
              name: this.currentSet.translations[0].name,
              description: this.currentSet.translations[0].description
            },
            {
              language: 'nl',
              name: this.currentSet.translations[1].name,
              description: this.currentSet.translations[1].description
            }
          ]
        })
    });

    if (response.ok) {
      console.log('Set updated successfully', this.currentSet);
      // Reset form fields
      this.setNumber = '';
      this.currentSet = null;
    } else {
      console.error('Failed to update set');
    }
  } catch (error) {
    console.error(error);
  }
}

  }
};
</script>


<style scoped>
.change-lego-set {
  width: 100%;
  height: 100%;

  display: flex;
  flex-direction: column;
  align-items: center;
}

.change-lego-set__title {
  font-size: 1.5rem;
  margin-bottom: 1rem;
}

.change-lego-set__form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.change-lego-set__input {
  padding: 0.5rem;
  margin-bottom: 1rem;
  width: 200px;
}

.change-lego-set__select {
  padding: 0.5rem;
  margin-bottom: 1rem;
  width: 200px;
}

.change-lego-set__button {
  padding: 0.5rem 1rem;
  background-color: rgb(195, 143, 254);
  color: #000000;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
