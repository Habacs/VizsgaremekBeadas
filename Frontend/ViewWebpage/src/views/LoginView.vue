<template>
  <div class="login-container">
    <h2>Login</h2>
    <form class="login-form" @submit.prevent="login">
      <input type="email" v-model="email" placeholder="Email" required />
      <input type="password" v-model="password" placeholder="Password" required />
      <button type="submit">Sign In</button>
    </form>
    <p>Don't have an account?</p>
    <button class="switch-btn" @click="goToRegister">Register here</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      email: "",
      password: "",
    };
  },
  methods: {
    login() {
      console.log("User Logged In:", this.email);
    },
    goToRegister() {
      this.$router.push("/register");
    },
  },
};
</script>

<style scoped>
.login-container {
  max-width: 400px;
  margin: 50px auto;
  padding: 20px;
  background-color: #121212;
  color: #ffffff;
  border-radius: 8px;
  box-shadow: 20px 20px 20px rgb(0, 0, 0);
  text-align: center;
}

.login-form {
  display: flex;
  flex-direction: column;
}

.login-form input {
  background-color: #1e1e1e;
  border: 1px solid #333;
  color: #fff;
  padding: 10px;
  margin: 10px 0;
  border-radius: 5px;
}

.login-form button {
  background-color: whitesmoke;
  color: black;
  border: none;
  padding: 10px 15px;
  border-radius: 5px;
  cursor: pointer;
  transition: background 0.3s;
}

.login-form button:hover {
  background-color: black;
  color: whitesmoke;
}

.switch-btn {
  background-color: whitesmoke;
  color: black;
  border: 1px solid black;
  padding: 10px 15px;
  margin-top: 10px;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s;
}

.switch-btn:hover {
  background-color: black;
  color: whitesmoke;
  border: 1px solid whitesmoke;
}
</style>