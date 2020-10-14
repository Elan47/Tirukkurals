<template>
  <div class="row">
    <div class="col-md-12">
      <!-- <h3>
        <b>CHAPTER : {{meta.current_page}}</b>
      </h3>-->
      <div class="card">
        <div class="card-header">
          <h3 class="lime ignore">
            <b>KURALS ({{ meta.from }} - {{ meta.to }})</b>
          </h3>
          <br />

          <button
            class="btn bg-lime text-white ignore"
            @click="firstkural(meta.first_page)"
          >
            First
          </button>

          <button
            class="btn bg-lime text-white ignore"
            @click="lastkural(meta.last_page)"
          >
            Last
          </button>

          <button
            v-if="meta.current_page <= 1"
            class="btn bg-lime text-white disabled ignore"
          >
            Prev
          </button>
          <button
            v-if="meta.current_page - 1 > 0"
            class="btn bg-lime text-white ignore"
            @click="prevkural(meta.current_page - 1)"
          >
            Prev
          </button>
          <button
            v-if="meta.current_page + 1 <= meta.last_page"
            class="btn bg-lime text-white ignore"
            @click="nextkural(meta.current_page + 1)"
          >
            Next
          </button>
          <button
            v-if="meta.current_page == meta.last_page"
            class="btn bg-lime text-white disabled ignore"
          >
            Next
          </button>
        </div>
        <div
          class="card-body border-darkng rounded"
          v-for="kural in kurals"
          :key="kural.id"
        >
          <h4>
            <!-- <ul class="list-group">
            <li class="list-group-item">-->
            <b class="lime ignore">KURAL : {{ kural.id }}</b>
            <!-- </li> -->
            <br />
            <br />
            <!-- <li class="list-group-item"> -->
            <span class="badge bg-grad text-white ignore">குறள்</span>
            <br />
            <br />
            {{ kural.tn }}
            <br />
            <br />
            <!-- </li> -->
            <!-- <li class="list-group-item"> -->
            <span class="badge bg-grad text-white ignore">Kural</span>
            <br />
            <br />
            {{ kural.tr }}
            <br />
            <br />
            <!-- </li> -->
            <!-- <li class="list-group-item"> -->
            <span class="badge bg-grad text-white ignore">Couplet</span>
            <br />
            <br />
            {{ kural.en }}
            <br />
            <br />
            <!-- </li> -->

            <!-- <li class="list-group-item"> -->
            <router-link
              :to="{ name: 'kural-details', params: { id: kural.id } }"
            >
              <button class="btn bg-lime text-white ignore">
                <b>VIEW DETAILS</b>
              </button>
            </router-link>
            <!-- </li> -->

            <!-- <li class="list-group-item"></li> -->
            <!-- </ul> -->
          </h4>
        </div>

        <div class="card-footer border border-dark">
          <button
            class="btn bg-lime text-white ignore"
            @click="firstkural(meta.first_page)"
          >
            First
          </button>

          <button
            class="btn bg-lime text-white ignore"
            @click="lastkural(meta.last_page)"
          >
            Last
          </button>

          <button
            v-if="meta.current_page <= 1"
            class="btn bg-lime text-white disabled ignore"
          >
            Prev
          </button>
          <button
            v-if="meta.current_page - 1 > 0"
            class="btn bg-lime text-white ignore"
            @click="prevkural(meta.current_page - 1)"
          >
            Prev
          </button>
          <button
            v-if="meta.current_page + 1 <= meta.last_page"
            class="btn bg-lime text-white ignore"
            @click="nextkural(meta.current_page + 1)"
          >
            Next
          </button>
          <button
            v-if="meta.current_page == meta.last_page"
            class="btn bg-lime text-white disabled ignore"
          >
            Next
          </button>
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
