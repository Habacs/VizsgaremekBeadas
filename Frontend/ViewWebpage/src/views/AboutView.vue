<template>
  <div class="card-page">
    <div class="card-container about">
      <h1>Rólunk</h1>

      <section class="mt-5">
        <h2>Kik vagyunk?</h2>
        <p>
          Mi egy elkötelezett, nonprofit csapat vagyunk, akik hisznek abban, hogy a közösségi segítség ereje valódi változást tud hozni.
        </p>
      </section>

      <section class="mt-5">
        <h2>Miért csináljuk?</h2>
        <p>
          Azért dolgozunk, hogy hidat képezzünk az adományozók és a rászorulók között. Célunk egy olyan megbízható platform létrehozása, ahol a támogatás valóban eljut azokhoz, akiknek a legnagyobb szükségük van rá.
        </p>
      </section>

      <section class="mt-5">
        <h2>Kapcsolat</h2>
        <p>
          Ha kérdésed van, tedd fel nyugodtan a
          <RouterLink to="/connection">Kapcsolat</RouterLink> oldalon keresztül.
        </p>
      </section>
    </div>
  </div>
</template>

<script>
export default {
  name: 'AboutView'
}
</script>

<style scoped>
.about h1 {
  color: var(--accent-color);
  margin-bottom: 1.5rem;
}

.about h2 {
  color: var(--text-color);
  margin-top: 2rem;
  font-size: 1.5rem;
  font-weight: bold;
}

.about p {
  margin-top: 0.5rem;
  line-height: 1.6;
  color: var(--text-color);
}

.about a {
  color: var(--accent-color);
  font-weight: bold;
  text-decoration: underline;
}
</style>
