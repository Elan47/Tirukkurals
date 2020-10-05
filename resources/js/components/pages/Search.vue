<template>
  <div class="row">
    <div class="col-md-12">
      <button
        @click="searchMenu"
        class="btn btn-info"
        type="button"
        data-toggle="collapse"
        data-target="#collapseExample"
        aria-expanded="false"
        aria-controls="collapseExample"
      >
        <b>
          <i class="fa fa-search"></i>
          {{ this.options }}
        </b>
      </button>

      <br />
      <br />
      <div class="collapse" id="collapseExample">
        <input
          class="col-md-9"
          v-model="searchid"
          name="search"
          @keyup.enter="idSearch(searchid)"
          placeholder="Search by number "
        />
        <button
          @click="idSearch(searchid)"
          class="btn btn-sm btn-info col-md-2"
        >
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
        <button
          @click="tnSearch(searchtn)"
          class="btn btn-sm btn-info col-md-2"
        >
          குறள்
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
        <button
          @click="trSearch(searchtr)"
          class="btn btn-sm btn-info col-md-2"
        >
          Kural
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
        <button
          @click="enSearch(searchen)"
          class="btn btn-sm btn-info col-md-2"
        >
          Couplet
          <i class="fa fa-search"></i>
        </button>
      </div>

      <br />
      <hr />
      <div class="card">
        <div class="card-header bg-dark text-white">
          <h2 style="text-align: center">
            Search for
            <span class="badge" v-if="queries.length == 0">...</span>
          </h2>
          <Highlight :queries="queries">{{ this.queries }}</Highlight>
        </div>
        <div
          class="card-body border border-dark"
          v-for="kural in kurals"
          :key="kural.id"
        >
          <h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <b>
                  <Highlight :queries="queries"
                    >Kural : {{ kural.id }}</Highlight
                  >
                </b>
                <br />
                <br />
                <span class="badge bg-primary text-white">குறள்</span>
                <br />
                <br />

                <Highlight :queries="queries">{{ kural.tn }}</Highlight>
                <br />
                <br />
                <span class="badge bg-primary text-white">Kural</span>
                <br />
                <br />

                <Highlight :queries="queries">{{ kural.tr }}</Highlight>
                <br />
                <br />
                <span class="badge bg-primary text-white">Couplet</span>
                <br />
                <br />

                <Highlight :queries="queries">{{ kural.en }}</Highlight>

                <br />
                <br />
                <router-link
                  :to="{ name: 'kural-details', params: { id: kural.id } }"
                >
                  <button class="btn btn-info">
                    <b>VIEW DETAILS</b>
                  </button>
                </router-link>
              </li>
            </ul>
          </h5>
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
      searchen: [],
      searchtr: [],
      searchtn: [],
      searchid: [],
      queries: "",
      options: "Search Menu",
    };
  },
  methods: {
    searchMenu() {
      if (this.options === "Search Menu") {
        this.options = "Hide Menu";
      } else {
        this.options = "Search Menu";
      }
    },
    trSearch(searchtr) {
      this.queries = this.searchtr;
      axios
        .get(this.$APPURL + "api/search/tr/" + this.searchtr)

        .then((response) => (this.kurals = response.data.data))
        .catch((error) => {
          console.log(error);
        });
    },
    enSearch(searchen) {
      this.queries = this.searchen;
      axios
        .get(this.$APPURL + "api/search/en/" + this.searchen)

        .then((response) => (this.kurals = response.data.data))
        .catch((error) => {
          console.log(error);
        });
    },
    tnSearch(searchtn) {
      this.queries = this.searchtn;
      axios
        .get(this.$APPURL + "api/search/tn/" + this.searchtn)

        .then((response) => (this.kurals = response.data.data))
        .catch((error) => {
          console.log(error);
        });
    },
    idSearch(searchid) {
      this.queries = this.searchid;
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


