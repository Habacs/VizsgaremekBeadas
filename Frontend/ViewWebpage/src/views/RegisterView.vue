<template>
  <div class="register-container">
    <h2>Register</h2>
    <form class="register-form" @submit.prevent="register">
      <input type="text" v-model="username" placeholder="Username" required />
      <input type="email" v-model="email" placeholder="Email" required />
      <input type="password" v-model="password" placeholder="Password" required />
      <button type="submit">Sign Up</button>
    </form>
    <p>Already have an account?</p>
    <button class="switch-btn" @click="goToLogin">Login here</button>
  </div>

  <div class="terms_and_conditions">
    <p>
      <input type="checkbox"/>
      By continuing, you agree to our 
      <router-link to="/terms">Terms of Service</router-link> 
      and acknowledge our <router-link to="/policy">Privacy Policy</router-link>.
    </p>
    <p>
      We recommend that you consult with your physician before beginning any exercise program
    </p>
  </div>

</template>

<script>
export default {
  data() {
    return {
      username: "",
      email: "",
      password: "",
    };
  },
  methods: {
    register() {
      console.log("User Registered:", this.username, this.email);
    },
    goToLogin() {
      this.$router.push("/login");
    },
  },
};
</script>

<style scoped>
.register-container {
  max-width: 400px;
  margin: 50px auto;
  padding: 20px;
  background-color: #121212;
  color: #ffffff;
  border-radius: 8px;
  text-align: center;
  box-shadow: 20px 20px 20px rgb(0, 0, 0);
}

.register-form {
  display: flex;
  flex-direction: column;
}

.register-form input {
  background-color: #1e1e1e;
  border: 1px solid #333;
  color: #fff;
  padding: 10px;
  margin: 10px 0;
  border-radius: 5px;
}

.register-form button {
  background-color: whitesmoke;
  color: black;
  border: none;
  padding: 10px 15px;
  border-radius: 5px;
  cursor: pointer;
  transition: background 0.3s;
}

.register-form button:hover {
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

.terms_and_conditions {
  text-align: center;
  color: rgb(14, 9, 9);
}
</style>
