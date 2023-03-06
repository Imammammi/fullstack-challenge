<template>
  <div v-for="user in savedUsers" :key="user.id">
    <UserCard :user="user" @click="goToUserView(user)" />
  </div>

  <p v-if="savedUsers.length === 0">
    Fetchin users...
  </p>
</template>

<script setup>
import axios from "axios";
import { ref } from "vue";
import { useRouter } from "vue-router";
import UserCard from "./UserCard.vue";

const userResult = ref([]);
const savedUsers = ref([]);
const usersError = ref([]);
const getUsers = async () => {
  try {
    const result = await axios.get(`http://127.0.0.1:8000/users`);
    userResult.value = result.data;
    savedUsers.value = userResult.value.data;
    console.log(savedUsers.value);
  } catch {
    usersError.value = true;
  }
};
await getUsers();

const router = useRouter();
const goToUserView = (user) => {
  router.push({
    name: "userView",
    params: { user: user.id },
    query: {
      lat: user.attributes.latitude,
      lng: user.attributes.longitude,
    },
  });
};
</script>
