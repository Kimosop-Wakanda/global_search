<template>
  <div class="row">
    <Index :users="users" :customers="customers" :tickets="tickets" :payments="payments" />
  </div>
</template>

<script>

import Dashboard from '@/Pages/Dashboard.vue';
import Index from '@/Pages/Data/Index.vue';

export default {
  components: {
    Dashboard,
    Index,
  },
  props: {
    users: {
      type: Array,
      required: true,
    },
    customers: {
      type: Array,
      required: true,
    },
    tickets: {
      type: Array,
      required: true,
    },
    payments: {
      type: Array,
      required: true,
    },
  },
};
</script>
