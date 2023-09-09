<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
  <header>
    <div class="max-w-7xl mx-auto">
      <nav clas="m-2 p-2">
        <RouterLink class="p-4 py-2 mr-4 bg-indigo-600 hover:bg-indigo-800 rounded text-white" to="/">Home</RouterLink>
        <RouterLink class="p-4 py-2 mr-4 bg-indigo-600 hover:bg-indigo-800 rounded text-white" to="/users">Usuarios</RouterLink>
      </nav>
    </div>
  </header>

</template>
