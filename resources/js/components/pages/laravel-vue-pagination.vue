<template>
  <ul>
    <li v-for="kural in laravelData.data" :key="kural.id">{{ kural.tn }}</li>

    <!-- <pagination :data="laravelData" @pagination-change-page="getResults()"></pagination> -->
    <pagination :data="laravelData.data">
      <span slot="prev-nav">&lt; Previous</span>
      <span slot="next-nav">Next &gt;</span>
    </pagination>
  </ul>
</template>

<script>
export default {
  data() {
    return {
      // Our data object that holds the Laravel paginator data
      laravelData: {},
    };
  },

  mounted() {
    // Fetch initial results
    this.getResults();
  },

  methods: {
    // Our method to GET results from a Laravel endpoint
    getResults(page) {
      axios
        .get("http://localhost/vue-kurals/public/api/paginate?page=" + page)
        .then((response) => {
          this.laravelData = response.data;
        });
    },
  },
};
</script>


