<script setup>
import { BASE_URL } from '@/config';
</script>

<template>
  <div class="sets-by-theme">
    <h2 class="sets-by-theme__title">Sets by Theme</h2>
    <form @submit.prevent="fetchSetsByTheme" class="sets-by-theme__form">
      <h3>Theme:</h3>
      <select v-model="selectedThemeCode" class="add-lego-set__input">
        <option v-for="theme in themes" :value="theme.code" :key="theme.code">{{ theme.name }}</option>
      </select>
      <button type="submit" class="sets-by-theme__button">Fetch Sets</button>
    </form>

    <ul v-if="sets.length !== 0">
      <li v-for="set in sets" :key="set.id">
        <div class="set-item">
          <div class="set-number">{{ set.set_number }}</div>
          <div class="set-name">{{ set.translations[0].name }}</div>
          <div class="set-price">{{ set.price }}</div>
        </div>
      </li>
    </ul>
    <div v-else-if="selectedThemeCode">No sets available for the selected theme.</div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      themes: [],
      sets: [],
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
    async fetchSetsByTheme() {
      if (this.selectedThemeCode) {
        try {
          const response = await fetch(`${BASE_URL}themes/${this.selectedThemeCode}/sets`);
          if (response.ok) {
            const responseData = await response.json();
            this.sets = responseData.data.data;
            console.log('Sets fetched successfully', this.sets);
          } else {
            console.error('Failed to fetch sets');
          }
        } catch (error) {
          console.error(error);
        }
      } else {
        this.sets = [];
      }
    },
  },
};
</script>

<style scoped>
.sets-by-theme {
  width: 100%;
  height: 100%;

  display: flex;
  flex-direction: column;
  align-items: center;
}

.sets-by-theme__title {
  font-size: 1.5rem;
  margin-bottom: 1rem;
}

.sets-by-theme__form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.sets-by-theme__select {
  padding: 0.5rem;
  margin-bottom: 1rem;
  width: 200px;
}

.sets-by-theme__button {
  padding: 0.5rem 1rem;
  background-color: rgb(195, 143, 254);
  color: #000000;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.set-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.set-number {
  font-weight: bold;
}

.set-name {
  flex-grow: 1;
  margin: 0 1rem;
}

.set-price {
  font-weight: bold;
}
</style>
