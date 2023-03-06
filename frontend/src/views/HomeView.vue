<template>
  <main class="container text-white">
    <div class="flex flex-col gap-4 mt-10">
      <Suspense>
        <UserList />
        <template #fallback>
          <UserCardSkeleton />
        </template>
      </Suspense>
    </div>
  </main>
</template>

<script setup>
import UserCardSkeleton from "../components/UserCardSkeleton.vue";
import UserList from "../components/UserList.vue";

</script>

<style lang="scss" scoped></style>
