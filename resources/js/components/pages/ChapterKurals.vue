<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Chapter - {{$route.params.id}} | Kurals</div>

          <p v-for="kural in kurals" :key="kural.id">{{ kural.id }} | {{ kural.tn }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      kurals: [],
    };
  },
  mounted() {
    axios
      .get(
        "http://localhost/vue-kurals/public/api/chapter/" +
          this.$route.params.id
      )
      .then((response) => (this.kurals = response.data.data));
  },
};
</script>
