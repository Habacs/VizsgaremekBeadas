<template>
    <div class="profile-container">
      <div class="profile-card">
        <h2>Profilom</h2>
  
        <div class="profile-section">
          <label>Email cím</label>
          <p>{{ user.email }}</p>
        </div>
  
        <div class="profile-section">
          <label>Felhasználónév</label>
          <div v-if="editingUsername">
            <input type="text" v-model="username" placeholder="Új felhasználónév" />
            <input type="password" v-model="currentPasswordForUsername" placeholder="Jelszó megerősítés" />
            <button @click="saveUsername">Mentés</button>
            <button @click="cancelEdit('username')">Mégse</button>
          </div>
          <div v-else>
            <p>{{ user.username }}</p>
            <button @click="editingUsername = true">Szerkesztés</button>
          </div>
        </div>
  
        <div class="profile-section">
          <label>Jelszó módosítása</label>
          <div v-if="editingPassword">
            <input type="password" v-model="currentPassword" placeholder="Jelenlegi jelszó" />
            <input type="password" v-model="newPassword" placeholder="Új jelszó" />
            <button @click="savePassword">Mentés</button>
            <button @click="cancelEdit('password')">Mégse</button>
          </div>
          <div v-else>
            <p>********</p>
            <button @click="editingPassword = true">Jelszó módosítása</button>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        user: {
          email: "simon@email.com",
          username: "szokesimon",
        },
        username: "",
        currentPasswordForUsername: "",
        currentPassword: "",
        newPassword: "",
        editingUsername: false,
        editingPassword: false,
      };
    },
    methods: {
      saveUsername() {
        if (!this.currentPasswordForUsername || !this.username) {
          alert("Minden mezőt ki kell tölteni!");
          return;
        }

        console.log("Felhasználónév mentése:", this.username);
        this.user.username = this.username;
        this.editingUsername = false;
        this.currentPasswordForUsername = "";
      },
      savePassword() {
        if (!this.currentPassword || !this.newPassword) {
          alert("Minden mezőt ki kell tölteni!");
          return;
        }

        console.log("Jelszó módosítva");
        this.editingPassword = false;
        this.currentPassword = "";
        this.newPassword = "";
      },
      cancelEdit(section) {
        if (section === "username") {
          this.editingUsername = false;
          this.username = "";
          this.currentPasswordForUsername = "";
        }
        if (section === "password") {
          this.editingPassword = false;
          this.currentPassword = "";
          this.newPassword = "";
        }
      },
    },
  };
  </script>
  
  <style scoped>
  .profile-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 85vh;
    background: linear-gradient(135deg, #e0f7f7 0%, #d1f0f0 100%);
    padding: 2rem;
  }
  
  .profile-card {
    background: #ffffff;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 0 20px rgba(0, 150, 160, 0.2);
    max-width: 500px;
    width: 100%;
  }
  
  .profile-card h2 {
    text-align: center;
    color: #0db7b7;
    margin-bottom: 1.5rem;
  }
  
  .profile-section {
    margin-bottom: 1.5rem;
  }
  
  .profile-section label {
    display: block;
    color: #0a2e36;
    font-weight: bold;
    margin-bottom: 0.5rem;
  }
  
  .profile-section p {
    background: #f2fafa;
    padding: 0.6rem;
    border-radius: 6px;
    color: #0a2e36;
  }
  
  input {
    width: 100%;
    padding: 0.6rem;
    margin-bottom: 0.6rem;
    border: 1px solid #ccc;
    border-radius: 6px;
  }
  
  button {
    margin-right: 0.5rem;
    background-color: #0db7b7;
    color: white;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 6px;
    cursor: pointer;
    transition: background 0.3s;
  }
  
  button:hover {
    background-color: #097c7c;
  }
  </style>
  