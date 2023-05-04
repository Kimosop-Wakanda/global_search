<template>
  <div>
    <h1>Data</h1>
    <table>
      <thead>
        <tr>
          <th>User</th>
          <th>Customer</th>
          <th>Ticket</th>
          <th>Payment</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(item, index) in items" :key="index">
          <td>{{ item.users }}</td>
          <td>{{ item.customers }}</td>
          <td>{{ item.tickets }}</td>
          <td>{{ item.payments }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
// import Dashboard from './Dashboard.vue';

export default {
  props: {
    users: Array,
    customers: Array,
    tickets: Array,
    payments: Array,
  },
  computed: {
    items() {
      return this.users.map((user, index) => {
        return {
          users: user,
          customers: this.customers[index],
          tickets: this.tickets[index],
          payments: this.payments[index],
        };
      });
    },
  },
};
</script>
