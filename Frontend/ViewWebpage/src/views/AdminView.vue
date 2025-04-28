<template>
    <div class="container-fluid admin-container">
      <form @submit.prevent="addProduct" class="admin-form">
        <h1 class="form-title">Termék hozzáadása</h1>
  
        <input v-model="productName" type="text" class="form-control mb-3" placeholder="Termék neve" required>
  
        <input @change="handleFileUpload" type="file" class="form-control mb-3" accept="image/png" required>
  
        <input v-model="productPrice" type="text" class="form-control mb-3" placeholder="Termék ára" required>
  
        <textarea v-model="productDescription" class="form-control mb-3" placeholder="Termék leírása" rows="3" required></textarea>
  
        <button type="submit" class="btn btn-primary">Hozzáadás</button>
      </form>
  
      <div v-if="products.length > 0" class="product-list mt-5">
        <h2>Hozzáadott termékek</h2>
        <div v-for="(product, index) in products" :key="index" class="card p-3 my-3">
          <p><strong>Név:</strong> {{ product.name }}</p>
          <p><strong>Fájl:</strong> {{ product.image }}</p>
          <p><strong>Ár:</strong> {{ product.price }}</p>
          <p><strong>Leírás:</strong> {{ product.description }}</p>
          <button @click="deleteProduct(index)" class="btn btn-danger btn-sm">Törlés</button>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: "AdminView",
    data() {
      return {
        productName: "",
        productImage: "",
        productPrice: "",
        productDescription: "",
        products: []
      };
    },
    methods: {
      handleFileUpload(event) {
        const file = event.target.files[0];
        if (file) {
          this.productImage = file.name;
        }
      },
      addProduct() {
        if (!this.productName || !this.productImage || !this.productPrice || !this.productDescription) {
          alert("Kérlek töltsd ki az összes mezőt!");
          return;
        }
  
        const newProduct = {
          name: this.productName,
          image: this.productImage,
          price: this.productPrice,
          description: this.productDescription
        };
  
        this.products.push(newProduct);
          this.productName = "";
        this.productImage = "";
        this.productPrice = "";
        this.productDescription = "";
        },
      deleteProduct(index) {
        this.products.splice(index, 1);
      }
    }
  }
  </script>
  
  <style scoped>
  .admin-container {
    background-color: #e0f7f7;
    padding: 2rem;
    border-radius: 10px;
  }
  
  .admin-form {
    background-color: #ffffff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }
  
  .form-title {
    font-size: 2rem;
    font-weight: bold;
    color: #218888;
    margin-bottom: 1.5rem;
    text-align: center;
  }
  
  .form-control {
    background-color: #deffff;
    border: 1px solid #afaeae;
  }
  
  button {
    margin-top: 1rem;
  }
  
  .product-list {
    margin-top: 3rem;
  }
  
  .product-list h2 {
    font-size: 1.75rem;
    margin-bottom: 1rem;
  }
  
  .card {
    background-color: #ffffff;
    border: 1px solid #afaeae;
  }
  </style>
  