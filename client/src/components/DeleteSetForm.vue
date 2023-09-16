<script setup>
import { BASE_URL } from '@/config';
</script>

<template>
  <div class="delete-lego-set">
    <h2 class="delete-lego-set__title">Delete Lego Set</h2>
    <form @submit.prevent="deleteSet" class="delete-lego-set__form">
      <input v-model="setId" type="text" placeholder="Lego Set ID" required class="delete-lego-set__input">
      <button type="submit" class="delete-lego-set__button">Delete</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      setId: ''
    };
  },
  methods: {
    deleteSet() {
    fetch(`${BASE_URL}sets/${this.setId}`, {
      method: 'DELETE',
      credentials: 'include',
    })
      .then(response => {
        if (response.ok) {  
          console.log('Lego set deleted successfully');
        } else {
          console.error('Error deleting Lego set', error);
        }
      })
      .catch(error => {
        console.error(error);
      });
    }
  }
};
</script>

<style scoped>
.delete-lego-set {
  width: 100%;
  height: 100%;

  display: flex;
  flex-direction: column;
  align-items: center;
}

.delete-lego-set__title {
  font-size: 1.5rem;
  margin-bottom: 1rem;
}

.delete-lego-set__form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.delete-lego-set__input {
  padding: 0.5rem;
  margin-bottom: 1rem;
  width: 200px;
}

.delete-lego-set__button {
  padding: 0.5rem 1rem;
  background-color: rgb(195, 143, 254);
  color: #000000;
  border: none; 
  border-radius: 4px;
  cursor: pointer;
}

</style>
