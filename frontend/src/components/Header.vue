<template>
  <header class="sticky top-0 bg-slate-800 shadow-lg">
    <nav
      class="container flex flex-col sm:flex-row items-center gap-4 text-white py-6"
    >
      <RouterLink :to="{ name: 'home' }">
        <div class="flex items-center gap-3">
          <img
          src="https://cdn.jim-nielsen.com/ios/512/weather-2017-06-19.png"
          class="h-6 sm:h-9 rounded-full"
          alt="weather house"
        />
          <p class="text-2xl">Weather House</p>
        </div>
      </RouterLink>
    </nav>
  </header>
</template>

<script setup>
</script>
