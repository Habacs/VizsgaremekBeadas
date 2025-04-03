<template>
 <RouterLink to="/Cart" class="floating-button"> 🛒 </RouterLink> 
 
 </template>
 
<script>
export default {
  name: "CartButton",
};
</script>

<style scoped>
.floating-button {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background-color: #3e644e;
  color: white;
  width: 60px;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  border-radius: 50%;
  text-decoration: none;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: transform 0.2s, background-color 0.2s;
}
 
.floating-button:hover {
  background-color: #e9e9e9;
  transform: scale(1.1);
}
</style>