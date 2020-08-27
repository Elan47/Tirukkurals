<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Chapter - {{$route.params.id}} | Kurals</div>
          <div v-for="kural in kurals" :key="kural.id">
            <p>
              {{ kural.id }} |
              <span style="font-family: 'Hind Madurai', sans-serif;">{{ kural.tn }}</span>
              /{{ kural.tr }}/{{ kural.en }}/
            </p>

            <router-link :to="{ name: 'kural-details', params: { id: kural.id }}">
              <button class="btn btn-info">
                <span style="color:white">Details</span>
              </button>
            </router-link>
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
      .get(this.$APPURL + "api/chapter/" + this.$route.params.id)
      .then((response) => (this.kurals = response.data.data));
  },
};
</script>
<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@400;500;600;700&display=swap");
</style>
