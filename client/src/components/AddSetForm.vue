<script setup>
import { BASE_URL } from '@/config';
</script>

<template>
  <div class="add-lego-set">
    <h2 class="add-lego-set__title">Add Lego Set</h2>
    <form @submit.prevent="addSet" class="add-lego-set__form">
      <input v-model="setNumber" type="number" placeholder="Set Number" required class="add-lego-set__input">
      <input v-model="price" type="number" step="0.01" placeholder="Price" required class="add-lego-set__input">
      <input v-model="pieceCount" type="number" placeholder="Piece Count" required class="add-lego-set__input">
      <input v-model="minifigureCount" type="number" placeholder="Minifigure Count" required class="add-lego-set__input">
      <input v-model="year" type="number" placeholder="Year" required class="add-lego-set__input">
      
      <h3>Theme:</h3>
      <select v-model="selectedThemeCode" class="add-lego-set__input">
        <option v-for="theme in themes" :value="theme.code" :key="theme.code">{{ theme.name }}</option>
      </select>

      <h3>English Translation:</h3>
      <input v-model="englishTranslation.name" type="text" placeholder="Name" required class="add-lego-set__input">
      <input v-model="englishTranslation.description" type="text" placeholder="Description" required class="add-lego-set__input">
      
      <h3>Dutch Translation:</h3>
      <input v-model="dutchTranslation.name" type="text" placeholder="Name" required class="add-lego-set__input">
      <input v-model="dutchTranslation.description" type="text" placeholder="Description" required class="add-lego-set__input">
      
      <button type="submit" class="add-lego-set__button">Add Set</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      setNumber: '',
      themeCode: '',
      price: null,
      pieceCount: null,
      minifigureCount: null,
      year: null,
      englishTranslation: { name: '', description: '' },
      dutchTranslation: { name: '', description: '' },
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
    async addSet() {
      const requestBody = {
        set_number: this.setNumber,
        theme_code: this.selectedThemeCode,
        price: this.price,
        piece_count: this.pieceCount,
        minifigure_count: this.minifigureCount,
        year: this.year,
        translations: [
          {
            language: 'en',
            name: this.englishTranslation.name,
            description: this.englishTranslation.description
          },
          {
            language: 'nl',
            name: this.dutchTranslation.name,
            description: this.dutchTranslation.description
          }
        ]
      };

      try {
        const response = await fetch(`${BASE_URL}sets`, {
          method: 'POST',
          credentials: 'include',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(requestBody)
        });

        if (response.ok) {
          console.log('Set added successfully');
          // Reset form fields
          this.setNumber = '';
          this.themeCode = '';
          this.price = null;
          this.pieceCount = null;
          this.minifigureCount = null;
          this.year = null;
          this.englishTranslation.name = '';
          this.englishTranslation.description = '';
          this.dutchTranslation.name = '';
          this.dutchTranslation.description = '';
        } else {
          console.error('Failed to add set');
        }
      } catch (error) {
        console.error(error);
      }
    }
  }
};
</script>


<style scoped>
.add-lego-set {
  width: 100%;
  height: 100%;

  display: flex;
  flex-direction: column;
  align-items: center;
}

.add-lego-set__title {
  font-size: 1.5rem;
  margin-bottom: 1rem;
}

.add-lego-set__form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.add-lego-set__input {
  padding: 0.5rem;
  margin-bottom: 1rem;
  width: 200px;
}

.add-lego-set__select {
  padding: 0.5rem;
  margin-bottom: 1rem;
  width: 200px;
}

.add-lego-set__button {
  padding: 0.5rem 1rem;
  background-color: rgb(195, 143, 254);
  color: #000000;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
