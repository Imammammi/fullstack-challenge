<template>
  <div>
    <Suspense>
      <template #default>
        <AsyncUserView />
      </template>
      <template #fallback>
        <UserViewSkeleton />
      </template>
    </Suspense>
  </div>
</template>

<script setup>
import AsyncUserView from "../components/AsyncUserView.vue";
import UserViewSkeleton from "../components/UserViewSkeleton.vue";
</script>
