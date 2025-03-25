<template>
  <header>
    <nav class="navbar">
      <RouterLink class="nav-link" to="/home">Home</RouterLink>
      <RouterLink class="nav-link" to="/connection">Connections</RouterLink>

      <div class="dropdown">
        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdown" data-bs-toggle="dropdown">
          Boys
        </button>
        <ul class="dropdown-menu">
          <li v-for="itemB in BoyItems" :key="itemB.name">
            <RouterLink class="dropdown-item" :to="itemB.path">
              {{ itemB.name }}
            </RouterLink>
          </li>
        </ul>
      </div>

      <div class="dropdown">
        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdown" data-bs-toggle="dropdown">
          Girls
        </button>
        <ul class="dropdown-menu">
          <li v-for="itemG in GirlItems" :key="itemG.name">
            <RouterLink class="dropdown-item" :to="itemG.path">
              {{ itemG.name }}
            </RouterLink>
          </li>
        </ul>
      </div>
    </nav>

    <div class="auth-links flex-column">
      <RouterLink class="nav-link" to="/register">Register</RouterLink>
      <RouterLink class="nav-link" to="/login">Login</RouterLink>
    </div>
  </header>
</template>

<script>
export default {
  name: "Navbar",
  data() {
    return {
      BoyItems: [
        { name: 'Tanks', path: '/tanks' },
        { name: 'Shirts', path: '/shirts' },
        { name: 'Shorts', path: '/shorts' },
        { name: 'Pants/Jeans', path: '/pants-jeans' },
        { name: 'Outerwear', path: '/outerwear' },
        { name: 'Joggers', path: '/joggers' },
        { name: 'Hats/Beanies', path: '/hats-beanies' },
        { name: 'Long Sleeves', path: '/long-sleeves' },
        { name: 'Accessories', path: '/accessories' },
        { name: 'All Products', path: '/all-products' }
      ],
      GirlItems: [
        { name: 'Tops', path: '/tops' },
        { name: 'Leggings', path: '/leggings' },
        { name: 'Shorts', path: '/womens-shorts' },
        { name: 'Sports Bras', path: '/sports-bras' },
        { name: 'Hoodies', path: '/hoodies' },
        { name: 'Joggers', path: '/womens-joggers' },
        { name: 'Hats/Accessories', path: '/womens-accessories' },
        { name: 'All Products', path: '/womens-all-products' }
      ]
    };
  }
};
</script>

<style scoped>
header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  padding: 10px 20px;
  background-color: #000000;
}

nav {
  display: flex;
  gap: 15px;
}

nav .nav-link {
  text-decoration: none;
  color: white;
  font-size: 1rem;
  padding: 10px 15px;
  background: linear-gradient(to bottom, #edeff1, #0b0b0b);
  border-radius: 5px;
  transition: background 0.3s, transform 0.2s;
}

nav .nav-link:hover {
  background: linear-gradient(to bottom, #edeff1, #0b0b0b);
  color: #000000;
  transform: scale(1.05);
}

.auth-links {
  text-decoration: none;
  color: white;
  font-size: 1rem;
  padding: 5px 10px;
  border-radius: 5px;
}
</style>
