<template>
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3>
            <b>CHAPTER : {{$route.params.id}} | KURALS</b>
          </h3>
        </div>

        <div class="card-body border border-primary" v-for="kural in kurals" :key="kural.id">
          <h4>
            <b>KURAL : {{ kural.id }}</b>
            <br />
            <br />
            <span class="badge bg-primary text-white">Tamil</span>
            <br />
            <br />
            {{ kural.tn }}
            <br />
            <br />
            <span class="badge bg-primary text-white">Transliteration</span>
            <br />
            <br />
            {{ kural.tr }}
            <br />
            <br />
            <span class="badge bg-primary text-white">English</span>
            <br />
            <br />
            {{ kural.en }}
            <br />
            <br />
            <router-link :to="{ name: 'kural-details', params: { id: kural.id }}">
              <button class="btn btn-info btn-lg">
                <b>VIEW DETAILS</b>
              </button>
            </router-link>
          </h4>
        </div>
      </div>
      <br />
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
