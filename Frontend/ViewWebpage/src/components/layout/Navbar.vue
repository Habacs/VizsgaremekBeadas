<template>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light custom-navbar shadow-sm">
      <div class="container">
        <RouterLink class="navbar-brand" to="/">Home</RouterLink>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <RouterLink class="nav-link" to="/connection">Connections</RouterLink>
            </li>
            <li class="nav-item dropdown">
              <button
                class="btn btn-light dropdown-toggle"
                type="button"
                id="boysDropdown"
                data-bs-toggle="dropdown"
                aria-expanded="false">
                Boys
              </button>
              <ul class="dropdown-menu" aria-labelledby="boysDropdown">
                <li v-for="itemB in BoyItems" :key="itemB.name">
                  <RouterLink class="dropdown-item" :to="itemB.path">
                    {{ itemB.name }}
                  </RouterLink>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <button
                class="btn btn-light dropdown-toggle"
                type="button"
                id="girlsDropdown"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Girls
              </button>
              <ul class="dropdown-menu" aria-labelledby="girlsDropdown">
                <li v-for="itemG in GirlItems" :key="itemG.name">
                  <RouterLink class="dropdown-item" :to="itemG.path">
                    {{ itemG.name }}
                  </RouterLink>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <RouterLink class="nav-link" to="/admin">Admin</RouterLink>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="auth-links">
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
  padding: 0px 20px;
  background-color: #e9fafa; 
}

nav {
  display: flex;
  gap: 15px;
}

nav .nav-link {
  color: #007f7f;
  font-weight: 500;
  padding: 10px 15px;
  border-radius: 5px;
  transition: background-color 0.3s, transform 0.2s;
  text-decoration: none;
}

nav .nav-link:hover {
  background-color: #d4f0f0;
  color: #005c5c;
  transform: scale(1.05);
}

.navbar-toggler {
  border: none;
  background-color: transparent;
}

.auth-links {
  display: flex;
  flex-direction: column;
  gap: 10px;
  padding: 10px;
}

.auth-links .nav-link {
  color: #007f7f;
  font-weight: 500;
  padding: 5px 10px;
  border-radius: 5px;
  text-decoration: none;
  background-color: #e9fafa;
}

.auth-links .nav-link:hover {
  color: #005c5c;
  background-color: #d4f0f0;
}

.navbar-brand {
  font-weight: bold;
  color: #00aaaa !important;
  font-size: 1.4rem;
}
</style>
