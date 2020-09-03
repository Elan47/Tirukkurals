<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Chapter - {{$route.params.id}} | Kurals</div>
          <br />
          <div class="card-body">
            <div v-for="kural in kurals" :key="kural.id">
              <p>
                <span
                  style="font-family: 'Hind Madurai', sans-serif;"
                >{{ kural.id }} |{{ kural.tn }}</span>
                <br />
                {{ kural.tr }}
                <br />
                {{ kural.en }}
                <router-link :to="{ name: 'kural-details', params: { id: kural.id }}">
                  <button style="float:right;" class="btn btn-info">
                    <span style="color:white">Details</span>
                  </button>
                </router-link>
              </p>
            </div>
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
