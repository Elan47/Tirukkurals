<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Kurals</div>
          <!-- <div class="card-body">{{kurals[0]}}</div> -->

          <p v-for="kural in kurals" :key="kural.id">
            {{ kural.id }} | {{ kural.tn }}
            <br />
            <br />
          </p>

          <div>{{link.previous}}</div>
          <div>{{link.length}}</div>
          <div>{{link.next}}</div>
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
      link: [],
    };
  },
  mounted() {
    axios
      .get("http://localhost/vue-kurals/public/api/kurals")
      .then(
        (response) => (
          (this.kurals = response.data.data), (this.link = response.data.links)
        )
      );
  },
};
</script>
