<template>
  <div class="row justify-content-center">
    <div class="col-md-12">
      <input
        class="col-md-9"
        v-model="searchid"
        name="search"
        @keyup.enter="idSearch(searchid)"
        placeholder="Search by number "
      />
      <button @click="idSearch(searchid)" class="btn btn-sm btn-info col-md-2">
        Number
        <i class="fa fa-search"></i>
      </button>
      <br />
      <br />
      <input
        class="col-md-9"
        v-model="searchtn"
        name="search"
        @keyup.enter="tnSearch(searchtn)"
        placeholder="Search in தமிழ்"
      />
      <button @click="tnSearch(searchtn)" class="btn btn-sm btn-info col-md-2">
        தமிழ்
        <i class="fa fa-search"></i>
      </button>
      <br />
      <br />
      <input
        class="col-md-9"
        v-model="searchtr"
        name="search"
        @keyup.enter="trSearch(searchtr)"
        placeholder="Search in Transliteration"
      />
      <button @click="trSearch(searchtr)" class="btn btn-sm btn-info col-md-2">
        Transliteration
        <i class="fa fa-search"></i>
      </button>
      <br />
      <br />
      <input
        class="col-md-9"
        v-model="searchen"
        name="search"
        @keyup.enter="enSearch(searchen)"
        placeholder="Search in English"
      />
      <button @click="enSearch(searchen)" class="btn btn-sm btn-info col-md-2">
        English
        <i class="fa fa-search"></i>
      </button>

      <br />
      <br />
      <hr />
      <div class="card">
        <div class="card-header">
          <h2 style="text-align:center">Top 10 Search Results</h2>
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
      searchtr: [],
      searchtn: [],
      searchid: [],
    };
  },
  methods: {
    trSearch(searchtr) {
      axios
        .get(this.$APPURL + "api/search/tr/" + this.searchtr)

        .then((response) => (this.kurals = response.data.data))
        .catch((error) => {
          console.log(error);
        });
    },
    enSearch(searchen) {
      axios
        .get(this.$APPURL + "api/search/en/" + this.searchen)

        .then((response) => (this.kurals = response.data.data))
        .catch((error) => {
          console.log(error);
        });
    },
    tnSearch(searchtn) {
      axios
        .get(this.$APPURL + "api/search/tn/" + this.searchtn)

        .then((response) => (this.kurals = response.data.data))
        .catch((error) => {
          console.log(error);
        });
    },
    idSearch(searchid) {
      axios
        .get(this.$APPURL + "api/search/id/" + this.searchid)

        .then((response) => (this.kurals = response.data.data))
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>


