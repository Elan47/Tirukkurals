<template>
  <div class="row justify-content-center">
    <div class="col-md-12">
      <input
        class="col-md-9"
        v-model="searchid"
        name="search"
        @keypress="idSearch(searchid)"
        placeholder="Search by number"
      />
      <button @click="idSearch(searchid)" class="btn btn-sm btn-info col-md-2">Number</button>
      <br />
      <br />

      <input
        class="col-md-9"
        v-model="searchen"
        name="search"
        @keypress="enSearch(searchen)"
        placeholder="Search in English"
      />
      <button @click="enSearch(searchen)" class="btn btn-sm btn-info col-md-2">English</button>
      <br />
      <br />
      <input
        class="col-md-9"
        v-model="searchtn"
        name="search"
        @keypress="tnSearch(searchtn)"
        placeholder="Search in Tamil"
      />
      <button @click="tnSearch(searchtn)" class="btn btn-sm btn-info col-md-2">Tamil</button>
      <br />
      <br />
      <hr />
      <div class="card">
        <h2 style="text-align:center">Results</h2>
        <!-- <div class="card-header"> -->

        <!-- </div> -->
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
            <router-link :to="{ name: 'kural-details', params: { id: kural.id }}">
              <button class="btn btn-info">
                <span style=" color:white">Details</span>
              </button>
            </router-link>
          </span>
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
      searchen: [],
      searchtn: [],
      searchid: [],
    };
  },
  computed: {
    enSearch(searchen) {
      axios
        .get(this.$APPURL + "api/search/en/" + this.searchen)

        // .then((response) => response)
        .then((response) => (this.kurals = response.data.data))
        .catch((error) => {
          console.log(error);
        });
    },
    tnSearch(searchtn) {
      axios
        .get(this.$APPURL + "api/search/tn/" + this.searchtn)

        // .then((response) => response)
        .then((response) => (this.kurals = response.data.data))
        .catch((error) => {
          console.log(error);
        });
    },
    idSearch(searchid) {
      axios
        .get(this.$APPURL + "api/search/id/" + this.searchid)

        // .then((response) => response)
        .then((response) => (this.kurals = response.data.data))
        .catch((error) => {
          console.log(error);
        });
    },
  },
  methods: {},
};
</script>


