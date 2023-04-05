<script setup>
import { reactive } from "vue";
import useUsers from "../../composables/users";

const { storeUser, errors } = useUsers();

const form = reactive({
  name: "",
  email: "",
  address: "",
});
</script>

<template>
  <div class="mt-12">
    <form
      class="max-w-md mx-auto p-4 bg-white shadow-md rounded-md"
      @submit.prevent="storeUser(form)"
    >
      <div class="space-y-6">
        <div class="mb-6">
          <label
            for="name"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Name</label
          >
          <input
            type="text"
            id="name"
            v-model="form.name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          />
          <div v-if="errors.name">
            <span class="text-sm text-red-400">{{ errors.name[0] }}</span>
          </div>
        </div>
        <div class="mb-6">
          <label
            for="email"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Email</label
          >
          <input
            type="email"
            id="email"
            v-model="form.email"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          />
          <div v-if="errors.email">
            <span class="text-sm text-red-400">{{ errors.email[0] }}</span>
          </div>
        </div>
        <div class="mb-6">
          <label
            for="address"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Address</label
          >
          <input
            type="text"
            id="address"
            v-model="form.address"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          />
          <div v-if="errors.address">
            <span class="text-sm text-red-400">{{ errors.address[0] }}</span>
          </div>
        </div>
        <div class="mt-4 space-x-2">
          <button
            type="submit"
            class="px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded"
          >
            Create
          </button>
          <RouterLink
            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded"
            to="/"
            >back</RouterLink
          >
        </div>
      </div>
    </form>
  </div>
</template>
