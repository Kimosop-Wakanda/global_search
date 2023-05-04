<template>
  <AppLayout title="Index">
    <template #header>
      <div class="search-container">
        <input type="text" v-model="searchQuery" placeholder="Search" ref="searchInput">
        <button @click="search()">Search</button>
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
            <tr v-for="customer in filteredCustomers" :key="customer.id">
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
            <tr v-for="ticket in filteredTickets" :key="ticket.id">
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
            <tr v-for="payment in filteredPayments" :key="payment.id">
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
import { defineComponent } from 'vue';
import AppLayout from '../../Layouts/AppLayout.vue';

export default defineComponent({
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
    data() {
        return {
            searchQuery: '',
        };
    },
    computed: {
        filteredCustomers() {
            return this.customers.filter((customer) =>
                customer.first_name.toLowerCase().includes(this.searchQuery.toLowerCase())
                || customer.last_name.toLowerCase().includes(this.searchQuery.toLowerCase())
            );
        },
        // filteredTickets() {
        //     return this.tickets.filter((ticket) =>
        //         ticket.title.toLowerCase().includes(this.searchQuery.toLowerCase())
        //         || ticket.description.toLowerCase().includes(this.searchQuery.toLowerCase())
        //     );
        // },

        filteredTickets() {
  return this.tickets.filter((ticket) =>
    ticket.title.toLowerCase().includes(this.searchQuery.toLowerCase())
    || ticket.description.toLowerCase().includes(this.searchQuery.toLowerCase())
    || (ticket.scheduled_date && ticket.scheduled_date.toString().includes(this.searchQuery))
  );
},

        // filteredPayments() {
        //     return this.payments.filter((payment) =>
        //         payment.first_name.toLowerCase().includes(this.searchQuery.toLowerCase())
        //         || payment.last_name.toLowerCase().includes(this.searchQuery.toLowerCase())
        //     );
        // },

        filteredPayments() {
  return this.payments.filter((payment) =>
    payment.first_name.toLowerCase().includes(this.searchQuery.toLowerCase())
    || payment.last_name.toLowerCase().includes(this.searchQuery.toLowerCase())
    || payment.amount.toString().includes(this.searchQuery)
  );
},
    },
    methods: {
        search() {
            this.$refs.searchInput.focus();
        },
    },
    components: {
        AppLayout,
    },
});
</script>
