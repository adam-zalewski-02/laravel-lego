<script setup>
import { BASE_URL } from '@/config';
</script>

<template>
  <div class="front-office">
    <h1>Front Office</h1>
    <div class="language-selection">
      <button @click="changeLanguage('en')" :class="{ active: getCurrentLanguage() === 'en' }">English</button>
      <button @click="changeLanguage('nl')" :class="{ active: getCurrentLanguage() === 'nl' }">Dutch</button>
    </div>
    <ul>
      <li v-for="set in sets" :key="set.id">
        <div class="set-item">
          <div class="set-number">{{ set.set_number }}</div>
          <div class="set-details">
            <div class="set-name">{{ getSetName(set) }}</div>
            <div class="set-description">{{ getSetDescription(set) }}</div>
            <div class="set-theme">{{ set.theme.name }}</div>
            <div class="set-sub-theme" v-if="set.sub_theme">{{ set.sub_theme.name }}</div>
            <div class="set-piece-count">{{ set.piece_count }} pieces</div>
            <div class="set-price">{{ set.price }}</div>
          </div>
        </div>
      </li>
    </ul>
    <div class="pagination">
      <button @click="goToPreviousPage" :disabled="!hasPreviousPage">Previous</button>
      <button @click="goToNextPage" :disabled="!hasNextPage">Next</button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      sets: [],
      currentLanguage: 'en',
      currentPage: 1,
      totalPages: 1,
      previousPageUrl: null,
      nextPageUrl: null,
    };
  },
  mounted() {
    this.fetchSets();
  },
  methods: {
    async fetchSets() {
      try {
        const response = await fetch(`${BASE_URL}sets?page=${this.currentPage}`);
        if (response.ok) {
          const responseData = await response.json();
          this.sets = responseData.data.data;
          this.totalPages = responseData.last_page;
          this.previousPageUrl = responseData.prev_page_url;
          this.nextPageUrl = responseData.next_page_url;
        } else {
          console.error('Failed to fetch sets');
        }
      } catch (error) {
        console.error(error);
      }
    },
    getCurrentLanguage() {
      return this.currentLanguage;
    },
    getSetName(set) {
      const translation = set.translations.find((t) => t.language === this.currentLanguage);
      return translation ? translation.name : '';
    },
    getSetDescription(set) {
      const translation = set.translations.find((t) => t.language === this.currentLanguage);
      return translation ? translation.description : '';
    },
    changeLanguage(language) {
      this.currentLanguage = language;
      this.fetchSets();
    },
    goToPreviousPage() {
      if (this.hasPreviousPage) {
        this.currentPage--;
        this.fetchSets();
      }
    },
    goToNextPage() {
      if (this.hasNextPage) {
        this.currentPage++;
        this.fetchSets();
      }
    },
  },
  computed: {
    hasPreviousPage() {
      return this.previousPageUrl !== null;
    },
    hasNextPage() {
      return this.nextPageUrl !== null;
    },
  },
};
</script>

<style scoped>
.front-office {
  padding: 1rem;
}

h1 {
  font-size: 24px;
  margin-bottom: 10px;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  margin-bottom: 10px;
}

.set-item {
  display: flex;
  align-items: center;
  border: 1px solid #ccc;
  padding: 10px;
}

.set-number {
  font-weight: bold;
  margin-right: 10px;
}

.set-details {
  flex-grow: 1;
}

.set-name {
  font-weight: bold;
  font-size: 16px;
}

.set-description {
  margin-bottom: 5px;
  color: #666;
}

.set-theme {
  margin-bottom: 5px;
  color: #888;
}

.set-sub-theme {
  margin-bottom: 5px;
  color: #888;
}

.set-piece-count,
.set-price {
  color: #555;
}

button {
  padding: 0.5rem 1rem;
  background-color: rgb(195, 143, 254);
  color: #000000;
  border: none; 
  border-radius: 4px;
  cursor: pointer;
}
</style>
