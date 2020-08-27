<template>
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <span>Kurals ({{meta.from}} - {{meta.to}}) Chapter - {{meta.current_page}}</span>
          <span class="float-right">
            <button class="btn btn-info" @click="firstkural(meta.first_page)">First</button>

            <button class="btn btn-info" @click="lastkural(meta.last_page)">Last</button>

            <button
              v-if="meta.current_page-1>0"
              class="btn btn-info"
              @click="prevkural(meta.current_page-1)"
            >Prev</button>
            <button
              v-if="meta.current_page+1<=meta.last_page"
              class="btn btn-info"
              @click="nextkural(meta.current_page+1)"
            >Next</button>
          </span>
        </div>
        <div class="card-body">
          <span
            class="list-group-item d-flex justify-content-between align-items-center"
            v-for="kural in kurals"
            :key="kural.id"
          >
            {{ kural.id }} | {{ kural.tn }}
            <br />
            {{ kural.tr }}
            <br />
            {{ kural.en }}
            <!-- <span class="float-right"> -->
            <router-link :to="{ name: 'kural-details', params: { id: kural.id }}">
              <button class="btn btn-info">
                <span style=" color:white">Details</span>
              </button>
            </router-link>
            <!-- </span> -->

            <br />
            <br />
          </span>

          <br />

          <div class="card-footer">
            <span class="float-right">
              <button class="btn btn-info" @click="firstkural(meta.first_page)">First</button>

              <button class="btn btn-info" @click="lastkural(meta.last_page)">Last</button>

              <button
                v-if="meta.current_page-1>0"
                class="btn btn-info"
                @click="prevkural(meta.current_page-1)"
              >Prev</button>
              <button
                v-if="meta.current_page+1<=meta.last_page"
                class="btn btn-info"
                @click="nextkural(meta.current_page+1)"
              >Next</button>
            </span>
          </div>
          <!-- This pagination method didn't work -->
          <!-- Reference https://www.youtube.com/watch?v=CfDvhuSB0rc -->
          <!-- <Pagination :meta="meta" :links="links" v-on:paginate="getKurals(page)"></Pagination> -->
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
      meta: [],
    };
  },
  created() {
    this.getkurals();
  },
  methods: {
    getkurals(page) {
      axios
        .get(this.$APPURL + "api/kurals")

        .then(
          (response) => (
            (this.kurals = response.data.data), (this.meta = response.data.meta)
          )
        )
        .catch((error) => {
          console.log(error);
        });
    },
    prevkural(page) {
      axios
        .get(this.$APPURL + "api/kurals?page=" + page)

        .then(
          (response) => (
            (this.kurals = response.data.data), (this.meta = response.data.meta)
          )
        )
        .catch((error) => {
          console.log(error);
        });
    },

    nextkural(page) {
      axios
        .get(this.$APPURL + "api/kurals?page=" + page)

        .then(
          (response) => (
            (this.kurals = response.data.data), (this.meta = response.data.meta)
          )
        )
        .catch((error) => {
          console.log(error);
        });
    },
    lastkural(page) {
      axios
        .get(this.$APPURL + "api/kurals?page=" + page)

        .then(
          (response) => (
            (this.kurals = response.data.data), (this.meta = response.data.meta)
          )
        )
        .catch((error) => {
          console.log(error);
        });
    },
    firstkural(page) {
      axios
        .get(this.$APPURL + "api/kurals?page=" + page)

        .then(
          (response) => (
            (this.kurals = response.data.data), (this.meta = response.data.meta)
          )
        )
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>
