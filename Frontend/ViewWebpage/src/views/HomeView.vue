<template>
  <div class="home-container">
    <section class="hero text-white text-center py-5">
      <div class="container">
        <h1 class="display-4 mb-3">Segíts, hogy mások is mozoghassanak</h1>
        <p class="lead mb-4">
          Támogasd a rászorulókat sportfelszereléssel – egy kis adomány nagy változást hozhat!
        </p>
        <button class="btn btn-light btn-lg text-teal">Nézd meg, kiknek segíthetsz</button>
      </div>
    </section>

    <div class="shared-bg py-5">
      <section class="container text-center mb-5">
        <h2 class="mb-4">Kiemelt célok</h2>
        <div class="row g-4 justify-content-center">
          <div class="col-md-4" v-for="product in featuredProducts" :key="product.id">
            <ProductCard v-bind="product" />
          </div>
        </div>
      </section>
      
      <section class="container text-center">
        <h2 class="mb-3">Te is lehetsz a változás része</h2>
        <p class="mb-4">Legyél részese egy közösségnek, amely törődik másokkal. Egy kis segítség is számít.</p>
        <button class="btn btn-primary btn-lg bg-teal border-0">Csatlakozom</button>
      </section>
    </div>
  </div>
</template>

<script>
import ProductCard from "@/components/ProductCard.vue";

export default {
  name: "HomeView",
  components: { ProductCard },
  data() {
    return {
      featuredProducts: [
        {
          id: 1,
          name: "Téli kabát egy fiatal sportoló lánynak",
          description: "Hogy ne kelljen kihagynia az edzéseket a hideg miatt.",
          image: "/images/kabat.jpg",
          category: "Kabát",
          goalAmount: 15000,
          collectedAmount: 8700,
        },
        {
          id: 2,
          name: "Sportcipő egy iskolás kisfiúnak",
          description: "A mozgás öröme mindenkit megillet.",
          image: "/images/cipo.jpg",
          category: "Cipő",
          goalAmount: 12000,
          collectedAmount: 4100,
        },
        {
          id: 3,
          name: "Melegítő szett edzésekhez",
          description: "Hogy legyen miben fejlődni és küzdeni.",
          image: "/images/melegito.jpg",
          category: "Melegítő",
          goalAmount: 18000,
          collectedAmount: 9200,
        },
      ],
    };
  },
};
</script>

<style scoped>
.home-container {
  font-family: 'Segoe UI', sans-serif;
  color: #2f2f2f;
}

.hero {
  background: linear-gradient(to right, #00b4b4, #7ce8dd);
  border-radius: 0 0 30px 30px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);

}

.text-teal {
  color: #007f7f !important;
}

.bg-teal {
  background-color: #00b4b4 !important;
}

.shared-bg {
  background-color: #94e8e8;
  border-radius: 30px 30px 0px 0px;
}

button.btn:hover {
  filter: brightness(1.1);
}
</style>
