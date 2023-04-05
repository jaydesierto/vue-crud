<script setup>
import { RouterLink, RouterView } from "vue-router";
</script>

<template>
  <header>
    <div class="max-w-7xl mx-auto">
      <nav class="p-2"></nav>
    </div>
  </header>

  <main class="max-w-7xl mx-auto min-h-screen">
    <RouterView />
  </main>
</template>
