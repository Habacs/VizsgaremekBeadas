<template>
  <div class="connections-container">
    <h2>Connections</h2>
    <ul class="connections-list">
      <li v-for="connection in connections" :key="connection.id" class="connection-item">
        <div class="connection-info">
          <span class="connection-name">{{ connection.name }}</span>
          <button class="connect-btn" @click="showDetails(connection)">View Details</button>
        </div>
        <div v-if="selectedConnection && selectedConnection.id === connection.id" class="connection-details">
          <p>Email: {{ selectedConnection.email }}</p>
          <p>Mobile: {{ selectedConnection.mobile }}</p>
        </div>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      connections: [
        { id: 1, name: "Simon", email: "simon@example.com", mobile: "06123456789" },
        { id: 2, name: "Csaba", email: "csaba@example.com", mobile: "06123456781" },
        { id: 3, name: "Márk", email: "mark@example.com", mobile: "0612345678" },
      ],
      selectedConnection: null,
    };
  },
  methods: {
    showDetails(connection) {
      this.selectedConnection = this.selectedConnection === connection ? null : connection;
    },
  },
};
</script>

<style scoped>
.connections-container {
  max-width: 600px;
  margin: 50px auto;
  padding: 20px;
  background-color: #121212;
  color: #ffffff;
  border-radius: 8px;
  box-shadow: 20px 20px 20px rgb(0, 0, 0);
  text-align: center;
}

.connections-list {
  list-style: none;
  padding: 0;
}

.connection-item {
  background-color: #1e1e1e;
  padding: 10px 15px;
  margin: 10px 0;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(255, 255, 255, 0.1);
  text-align: left;
}

.connection-info {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.connection-name {
  font-size: 1.1rem;
}

.connect-btn {
  background: linear-gradient(to bottom, #edeff1, #0b0b0b);
  color: whitesmoke;
  border: none;
  padding: 8px 12px;
  border-radius: 5px;
  cursor: pointer;
  transition: background 0.3s;
}

.connect-btn:hover {
  background-color: whitesmoke;
  color: black;
}

.connection-details {
  margin-top: 10px;
  padding: 10px;
  background-color: #252525;
  border-radius: 5px;
}
</style>
