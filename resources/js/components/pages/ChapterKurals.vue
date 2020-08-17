<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Chapter - {{$route.params.id}} | Kurals</div>
          <div v-for="kural in kurals" :key="kural.id">
            <p>{{ kural.id }} | {{ kural.tn }}</p>
            <button class="btn btn-info">
              <router-link :to="{ name: 'kural-details', params: { id: kural.id }}">
                <span style="color:white">Details</span>
              </router-link>
            </button>
          </div>
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
