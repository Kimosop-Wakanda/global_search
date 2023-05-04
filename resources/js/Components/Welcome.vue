<template>
  <div>
    <h1>My Vue Component</h1>
    <a :href="route('home')">Go to Home</a>
  </div>
</template>

<script>
export default {
  name: 'MyVueComponent',
  methods: {
    route(name, params, absolute) {
      return "{{ route('" + name + "', " + JSON.stringify(params) + ", " + absolute + ") }}";
    }
  }
}
</script>



<!-- <template> 
  <div>
    <div>
    <label for="search-input">Search:</label>
    <input type="text" id="search-input" v-model="searchQuery" @keyup.enter="search">

  
    <div v-if="isLoading">Loading...</div>
    <div v-else>
      <div v-for="customer in customers" :key="customer.id">
        <h3>Customer {{ customer.id }}: {{ customer.first_name }} {{ customer.last_name }}</h3>
        <p>Username: {{ customer.username }}</p>
        <p>Expiry Date: {{ customer.expiry_date }}</p>
      </div>
      <div v-for="ticket in tickets" :key="ticket.id">
        <h3>Ticket {{ ticket.id }}: {{ ticket.title }}</h3>
        <p>Description: {{ ticket.description }}</p>
        <p>Scheduled Date: {{ ticket.scheduled_date }}</p>
        <p>Assigned User ID: {{ ticket.user_id }}</p>
      </div>
      <div v-for="payment in payments" :key="payment.id">
        <h3>Payment {{ payment.id }}: {{ payment.transaction_code }}</h3>
        <p>Amount: {{ payment.amount }}</p>
        <p>Account Number: {{ payment.account_number }}</p>
        <p>Transaction Date: {{ payment.transaction_date }}</p>
      </div>
    </div>
    
  </div>
    
  </div>
</template>


<script>
export default {
  data() {
    return {
      isLoading: true,
      customers: [],
      tickets: [],
      payments: [],
      searchQuery: '',
    };
  },
  mounted() {
    // const query = this.$route.params.query;
    const query = this.$route.query.query;
    this.fetchData(query);
  },
  methods: {
    async fetchData(query) {
      try {
        const response = await fetch(`/api/dashboard/search/${query}`);
        const data = await response.json();
        this.customers = data.customers;
        this.tickets = data.tickets;
        this.payments = data.payments;
        this.isLoading = false;
      } catch (error) {
        console.error(error);
        this.isLoading = false;
      }
    },
    async search() {
      try {
        const response = await fetch(`/api/dashboard/search/${this.searchQuery}`);
        const data = await response.json();
        this.customers = data.customers;
        this.tickets = data.tickets;
        this.payments = data.payments;
        this.isLoading = false;
      } catch (error) {
        console.error(error);
        this.isLoading = false;
      }
    },
  },
};
</script> -->
