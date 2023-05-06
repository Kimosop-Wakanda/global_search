<template>
  <AppLayout title="Index">
    
    <template #header>
      <div class="search-container">
        <input type="text" v-model="state.searchQuery" placeholder="Search" ref="searchInput">
        <button @click="search">Search</button> 
      </div>
    </template>

    <div class="tables-container">
      <div class="table">
        <h2>Customers</h2>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Username</th>
              <th>Expiry Date</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="customer in customers" :key="customer.id">
              <td>{{ customer.id }}</td>
              <td>{{ customer.first_name }}</td>
              <td>{{ customer.last_name }}</td>
              <td>{{ customer.username }}</td>
              <td>{{ customer.expiry_date }}</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="table">
        <h2>Tickets</h2>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Description</th>
              <th>Customer ID</th>
              <th>Scheduled Date</th>
              <th>User ID</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="ticket in tickets" :key="ticket.id">
              <td>{{ ticket.id }}</td>
              <td>{{ ticket.title }}</td>
              <td>{{ ticket.description }}</td>
              <td>{{ ticket.customer_id }}</td>
              <td>{{ ticket.scheduled_date }}</td>
              <td>{{ ticket.user_id }}</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="table">
        <h2>Payments</h2>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Transaction Code</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Customer ID</th>
              <th>Amount</th>
              <th>Account Number</th>
              <th>Transaction Date</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="payment in payments" :key="payment.id">
              <td>{{ payment.id }}</td>
              <td>{{ payment.transaction_code }}</td>
              <td>{{ payment.first_name }}</td>
              <td>{{ payment.last_name }}</td>
              <td>{{ payment.customer_id }}</td>
              <td>{{ payment.amount }}</td>
              <td>{{ payment.account_number }}</td>
              <td>{{ payment.transaction_date }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </AppLayout>
</template>

<script>
import { defineComponent, reactive } from 'vue';
import AppLayout from '../../Layouts/AppLayout.vue';
import { Inertia } from '@inertiajs/inertia';

export default defineComponent({
  props: {
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

  setup(props) {
    const state = reactive({
      searchQuery: '',
      customers: props.customers,
      tickets: props.tickets,
      payments: props.payments,
    });

    const search = () => {
    Inertia.get('/search', { q: state.searchQuery }).then((response) => {
        state.customers = response.customers;
        state.tickets = response.tickets;
        state.payments = response.payments;
    });
};


    return {
      state,
      search,
    };
  },
  components: {
    AppLayout,
  },
});
</script>
