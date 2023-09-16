<script setup>
import { BASE_URL } from '@/config';
</script>

<template>
  <div class="auth-container">
    <h2>Login</h2>
    <form @submit.prevent="login" class="auth-form">
      <label>
        Email:
        <input type="email" v-model="loginForm.email" required />
      </label>
      <br />
      <label>
        Password:
        <input type="password" v-model="loginForm.password" required />
      </label>
      <br />
      <button type="submit">Login</button>
    </form>

    <h2>Register</h2>
    <form @submit.prevent="register" class="auth-form">
      <label>
        Name:
        <input type="text" v-model="registerForm.name" required />
      </label>
      <br />
      <label>
        Password:
        <input type="password" v-model="registerForm.password" required />
      </label>
      <br />
      <label>
        Email:
        <input type="email" v-model="registerForm.email" required />
      </label>
      <br />
      <button type="submit">Register</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      loginForm: {
        email: '',
        password: '',
      },
      registerForm: {
        name: '',
        password: '',
        email: '',
      },
    };
  },
  methods: {
    async login() {
        try {
            const { email, password } = this.loginForm;
            const requestBody = {
            email,
            password
            };

            const response = await fetch(`${BASE_URL}users/login`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            credentials: 'include',
            body: JSON.stringify(requestBody)
            });

            if (response.ok) {
            console.log('Login successful');
            // Reset the form
            this.loginForm.email = '';
            this.loginForm.password = '';
            } else {
            console.error('Login failed');
            }
        } catch (error) {
            console.error(error);
        }
    },

    async register() {
        try {
            const { name, email, password } = this.registerForm;
            const requestBody = {
            name,
            email,
            password
            };

            const response = await fetch(`${BASE_URL}users/register`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(requestBody),
            });

            if (response.ok) {
            console.log('Registration successful');
            // Reset the form   
            this.registerForm.username = '';
            this.registerForm.password = '';
            this.registerForm.email = '';
            } else {
            console.error('Registration failed');
            }
        } catch (error) {
            console.error(error);
        }
    },
  },
};
</script>

<style scoped>
.auth-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 50px;
}

.auth-form {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 20px;
}

label {
  margin-bottom: 10px;
}

input[type="text"],
input[type="password"],
input[type="email"] {
  padding: 5px;
  margin-bottom: 10px;
  width: 200px;
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
