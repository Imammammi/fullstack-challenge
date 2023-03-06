<template>
  <div
    class="flex py-6 px-3 bg-slate-800 rounded-md shadow-md cursor-pointer"
  >
    <div class="flex flex-col flex-1">
      <div class="flex items-center space-x-4">
        <font-awesome-icon icon="fa-solid fa-user" class="w-8 h-8" />
        <h2 class="text-3xl py-2">{{ user.attributes.name }}</h2>
      </div>
      <h3 class="pl-12">
        <font-awesome-icon
          icon="fa-solid fa-location-dot"
          class="text-red-600 pr-1"
        />
        <span>{{ user.attributes.latitude }}</span
        >, <span>{{ user.attributes.longitude }}</span>
      </h3>
    </div>
  </div>
</template>

<script setup>
defineProps({
  user: {
    type: Object,
    default: () => {},
  },
});
</script>
