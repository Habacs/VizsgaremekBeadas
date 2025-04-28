<template>
  <div class="page-wrapper">
    <h2>Bejelentkezés</h2>
    <form class="login-form" @submit.prevent="login">
      <input type="text" v-model="identifier" placeholder="Felhasználónév vagy Email cím" required />
      <input type="password" v-model="password" placeholder="Jelszó" required />
      <button type="submit">Belépés</button>
    </form>

    <p class="mt-3">Még nincs fiókod?</p>
    <RouterLink class="switch-btn" to="/Register">Regisztrálj itt</RouterLink>

    <p v-if="errorMessage" class="error-message">{{ errorMessage }}</p>
  </div>
</template>

<script>
export default {
  name: 'LoginView',
  data() {
    return {
      identifier: '',
      password: '',
      errorMessage: ''
    };
  },
  methods: {
    login() {
      const users = [
        { username: 'admin', email: 'admin@example.hu', password: 'admin123', route: '/admin' },
        { username: 'user', email: 'user@example.hu', password: 'user123', route: '/products' }
      ];
      const foundUser = users.find(user =>
        (user.username === this.identifier || user.email === this.identifier) &&
        user.password === this.password
      );

      if (foundUser) {
        this.$router.push(foundUser.route);
      } else {
        this.errorMessage = 'Hibás felhasználónév/email vagy jelszó!';
      }
    },
  }
};
</script>


<style scoped>
.login-form {
  display: flex;
  flex-direction: column;
}

.login-form input {
  padding: 0.8rem 1rem;
  margin-bottom: 1rem;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 1rem;
  transition: border-color 0.3s;
}

.login-form input:focus {
  outline: none;
  border-color: #00b4b4;
  box-shadow: 0 0 0 2px rgba(0, 180, 180, 0.2);
}

.login-form button {
  background-color: #00b4b4;
  color: white;
  border: none;
  padding: 0.8rem;
  border-radius: 8px;
  cursor: pointer;
  font-size: 1rem;
  transition: background-color 0.3s;
}

.login-form button:hover {
  background-color: #007f7f;
}

.switch-btn {
  text-decoration: none;
  margin-top: 0.5rem;
  background-color: transparent;
  border: 1px solid #00b4b4;
  color: #00b4b4;
  padding: 0.6rem 1rem;
  border-radius: 8px;
  cursor: pointer;
  font-size: 1rem;
  transition: all 0.3s;
}

.switch-btn:hover {
  background-color: #00b4b4;
  color: white;
}

.mt-3 {
  margin-top: 1rem;
}
.error-message {
  color: red;
  margin-top: 1rem;
  font-weight: bold;
}
</style>
