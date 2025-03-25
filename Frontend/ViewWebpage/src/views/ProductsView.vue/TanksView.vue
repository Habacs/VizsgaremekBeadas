<template>
    <div class="tanks-page">
      <FilterSidebar />
      <div class="product-grid">
        <ProductCard
          v-for="product in products"
          :key="product.id"
          v-bind="product"
        />
      </div>
    </div>
  </template>
  
  <script>
  import FilterSidebar from "@/components/FilterSidebar.vue";
  import ProductCard from "@/components/ProductCard.vue";
  
  export default {
    components: { FilterSidebar, ProductCard },
    data() {
      return {
        products: [
          {
            id: 1,
            image: "link_az_elso_kephez",
            name: "Power Hoodie",
            fit: "Oversized Fit",
            color: "Charcoal Core Marl",
            price: 75,
            isNew: true
          },
          {
            id: 2,
            image: "link_a_masodik_kephez",
            name: "Power Wordmark Joggers",
            fit: "Oversized Fit",
            color: "Charcoal Core Marl",
            price: 60,
            isNew: true
          }
        ]
      };
    }
  };
  </script>
  
  <style scoped>
  .tanks-page {
    display: flex;
  }
  
  .product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 15px;
    padding: 20px;
    flex: 1;
  }
  </style>
  