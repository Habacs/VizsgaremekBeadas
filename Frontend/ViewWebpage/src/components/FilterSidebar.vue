<template>
    <div class="filter-sidebar container">
      <div class="card bg-dark text-white border-secondary">
        <div class="card-header bg-secondary text-white">
          <h5 class="mb-0">Szűrők</h5>
        </div>
        <div class="card-body">
          <div class="accordion" id="filterAccordion">
            <div class="accordion-item bg-dark border-secondary">
              <h2 class="accordion-header" id="priceFilterHeading">
                <button
                  class="accordion-button bg-secondary text-white"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#priceFilter"
                  aria-expanded="true"
                  aria-controls="priceFilter">
                  Ár
                </button>
              </h2>
              <div
                id="priceFilter"
                class="accordion-collapse collapse show"
                aria-labelledby="priceFilterHeading"
                data-bs-parent="#filterAccordion">
                <div class="accordion-body">
                  <input type="range" class="form-range" min="0" max="500" step="10" v-model="price">
                  <div class="d-flex justify-content-between">
                    <span>0 Ft</span>
                    <span>{{ price }} Ft</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-dark border-secondary">
              <h2 class="accordion-header" id="sizeFilterHeading">
                <button
                  class="accordion-button collapsed bg-secondary text-white"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#sizeFilter"
                  aria-expanded="false"
                  aria-controls="sizeFilter"
                >
                  Méretek
                </button>
              </h2>
              <div
                id="sizeFilter"
                class="accordion-collapse collapse"
                aria-labelledby="sizeFilterHeading"
                data-bs-parent="#filterAccordion"
              >
                <div class="accordion-body">
                  <div v-for="size in sizes" :key="size" class="form-check">
                    <input class="form-check-input" type="checkbox" :id="size" v-model="selectedSizes">
                    <label class="form-check-label text-white" :for="size">
                      {{ size }}
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-dark border-secondary">
              <h2 class="accordion-header" id="brandFilterHeading">
                <button
                  class="accordion-button collapsed bg-secondary text-white"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#brandFilter"
                  aria-expanded="false"
                  aria-controls="brandFilter"
                >
                  Márka
                </button>
              </h2>
              <div
                id="brandFilter"
                class="accordion-collapse collapse"
                aria-labelledby="brandFilterHeading"
                data-bs-parent="#filterAccordion"
              >
                <div class="accordion-body">
                  <div v-for="brand in brands" :key="brand" class="form-check">
                    <input class="form-check-input" type="checkbox" :id="brand" v-model="selectedBrands">
                    <label class="form-check-label text-white" :for="brand">
                      {{ brand }}
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="d-grid gap-2 mt-3">
            <button class="btn btn-outline-light" @click="applyFilters">Alkalmazás</button>
            <button class="btn btn-outline-secondary" @click="resetFilters">Visszaállítás</button>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: "FilterSidebar",
    data() {
      return {
        price: 250,
        sizes: ["S", "M", "L", "XL", "XXL"],
        selectedSizes: [],
        brands: ["Nike", "Adidas", "Puma", "New balance"],
        selectedBrands: [],
      };
    },
    methods: {
      applyFilters() {
          this.price;
          this.selectedSizes;
          this.selectedBrands;
      },
      resetFilters() {
        this.price = 250;
        this.selectedSizes = [];
        this.selectedBrands = [];
      },
    },
  };
  </script>
  
  <style scoped>
  .filter-sidebar {
    color: white;
    max-width: 350px;
    padding: 10px;
  }
  .accordion-body{
    color: white;
  }
  .accordion-button {
    color: white;
    background-color: #343a40;
    border: none;
  }
  .accordion-button:focus {
    box-shadow: none;
  }
  .accordion-item {
    border: 1px solid #6c757d;
  }

  @media (max-width: 768px) {
    .filter-sidebar {
      max-width: 100%;
    }
  }
  </style>
  