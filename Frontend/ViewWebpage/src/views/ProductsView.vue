<template>
  <div class="product-view">
    <div class="container py-5">
      <h1 class="text-center text-teal mb-4">Támogatható célok</h1>
      <p class="text-center text-muted mb-5">Válassz egy ügyet, és adj hozzá egy kis reményt valaki életéhez.</p>

      <div class="row g-4">
        <div class="col-md-6 col-lg-4" v-for="product in products" :key="product.id">
          <div class="card h-100 shadow-sm border-0 product-card">
            <img :src="product.image" class="card-img-top" :alt="product.name">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title text-teal">{{ product.name }}</h5>
              <p class="card-text mb-2">{{ product.description }}</p>
              <div class="mt-auto">
                <div class="progress mb-2" style="height: 8px;">
                  <div
                    class="progress-bar bg-teal"
                    :style="{ width: progressPercentage(product) + '%' }"
                    role="progressbar"
                    :aria-valuenow="product.collectedAmount"
                    :aria-valuemin="0"
                    :aria-valuemax="product.goalAmount"
                  ></div>
                </div>
                <small class="text-muted">{{ product.collectedAmount }} Ft / {{ product.goalAmount }} Ft</small>
              </div>
            </div>
            <div class="card-footer bg-transparent border-0">
              <button class="btn btn-outline-teal w-100">Támogatás</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ProductView",
  data() {
    return {
      products: [
        {
          id: 1,
          name: "Téli kabát egy fiatal sportoló lánynak",
          description: "Hogy ne kelljen kihagynia az edzéseket a hideg miatt.",
          image: "/images/kabat.jpg",
          goalAmount: 15000,
          collectedAmount: 8700,
        },
        {
          id: 2,
          name: "Sportcipő egy iskolás kisfiúnak",
          description: "A mozgás öröme mindenkit megillet.",
          image: "/images/cipo.jpg",
          goalAmount: 12000,
          collectedAmount: 4100,
        },
        {
          id: 3,
          name: "Melegítő szett edzésekhez",
          description: "Hogy legyen miben fejlődni és küzdeni.",
          image: "/images/melegito.jpg",
          goalAmount: 18000,
          collectedAmount: 9200,
        },
        {
          id: 4,
          name: "Torna szőnyeg otthoni edzésekhez",
          description: "Egy fiatal tornász otthoni gyakorlásához szükséges.",
          image: "/images/szonyeg.jpg",
          goalAmount: 8000,
          collectedAmount: 3500,
        },
        {
          id: 5,
          name: "Labda egy közösségi focicsapathoz",
          description: "Egy új labda nagy öröm a gyerekeknek!",
          image: "/images/labda.jpg",
          goalAmount: 6000,
          collectedAmount: 6000,
        },
      ],
    };
  },
  methods: {
    progressPercentage(product) {
      return Math.min(100, (product.collectedAmount / product.goalAmount) * 100);
    },
  },
};
</script>

<style scoped>
.product-view {
  background: linear-gradient(to bottom, #e6ffff, #ffffff);
  min-height: 100vh;
  padding-top: 3rem;
  background-image: url("@/ASSETS/Product_wall.png");
  background-repeat: repeat;
  background-size: auto;
}

.text-teal {
  color: #007f7f;
}

.bg-teal {
  background-color: #00b4b4 !important;
}

.btn-outline-teal {
  color: #007f7f;
  border: 1px solid #00b4b4;
}

.btn-outline-teal:hover {
  background-color: #00b4b4;
  color: white;
}

.product-card {
  border-radius: 16px;
  overflow: hidden;
  transition: transform 0.2s ease;
}

.product-card:hover {
  transform: translateY(-5px);
}
</style>
