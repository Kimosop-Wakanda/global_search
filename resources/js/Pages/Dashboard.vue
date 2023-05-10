<template>
  <div class="row">
    <Index :customers="customers" :tickets="tickets" :payments="payments" />
  </div>
</template>

<script>
import axios from 'axios';
import Index from '@/Pages/Data/Index.vue';

export default {
  components: {
    Index,
  },
  data() {
    return {
      customers: [],
      tickets: [],
      payments: [],
    };
  },
  mounted() {
    this.fetchData();
  },
  methods: {
    fetchData() {
      axios.get('/api/customers').then((response) => {
        this.customers = response.data;
      });
      axios.get('/api/tickets').then((response) => {
        this.tickets = response.data;
      });
      axios.get('/api/payments').then((response) => {
        this.payments = response.data;
      });
    },
  },
};
</script>
