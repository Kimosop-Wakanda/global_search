<template>
  <AppLayout title="Dashboard">
    <template #header>
      <div class="flex items-center justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Dashboard
        </h2>
        <input type="text" class="ml-4 px-2 py-1 rounded-lg" placeholder="Search" v-model="searchQuery" />
      </div>
    </template>
    <!-- <div class="pt-0">
      <Index :users="users" :customers="customers" :tickets="tickets" :payments="payments" />
    </div> -->
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { ref } from 'vue';

const searchQuery = ref('');
const customers = ref([]);
const tickets = ref([]);
const payments = ref([]);
const users = ref([]);

// Fetch data and set it to customers, tickets, payments, and users refs

</script>
