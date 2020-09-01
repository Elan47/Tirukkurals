<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <span>Kural No - {{data[0].kural_no}}</span>
            <span class="float-right">
              <button
                v-if="data[0].kural_no-1>0"
                class="btn btn-info"
                @click="prevkural(data[0].kural_no-1)"
              >Prev</button>
              <button
                v-if="data[0].kural_no+1<=1330"
                class="btn btn-info"
                @click="nextkural(data[0].kural_no+1)"
              >Next</button>
            </span>
          </div>
          <div class="card-body">
            <!-- <p>Kural No - {{data[0].kural_no}}</p> -->
            <p>{{data[0].kural_en}}</p>
            <p>{{data[0].kural_tn}}</p>
            <p>{{data[0].kural_tr}}</p>
            <p>{{data[0].en_explanation}}</p>
            <br />
            <p>Chapter No -{{data[1].chap_no}}</p>
            <p>{{data[1].chap_en}}</p>
            <p>{{data[1].chap_tn}}</p>
            <p>{{data[1].chap_tr}}</p>
            <br />
            <p>Chapter Group No -{{data[2].chap_grp_no}}</p>
            <p>{{data[2].chap_grp_en}}</p>
            <p>{{data[2].chap_grp_tn}}</p>
            <p>{{data[2].chap_grp_tr}}</p>
            <br />

            <p>Section No -{{data[3].section_no}}</p>
            <p>{{data[3].section_en}}</p>
            <p>{{data[3].section_tn}}</p>
            <p>{{data[3].section_tr}}</p>
          </div>
        </div>
        <div class="card-footer float-right">
          <button
            v-if="data[0].kural_no-1>0"
            class="btn btn-info"
            @click="prevkural(data[0].kural_no-1)"
          >Prev</button>
          <button
            v-if="data[0].kural_no+1<=1330"
            class="btn btn-info"
            @click="nextkural(data[0].kural_no+1)"
          >Next</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      data: [this.data],
    };
  },
  created() {
    this.getkural(this.$route.params.id);
  },
  methods: {
    getkural(page) {
      axios
        .get(this.$APPURL + "api/kural/" + page)

        .then((response) => (this.data = response.data))
        .catch((error) => {
          console.log(error);
        });
    },
    prevkural(page) {
      axios
        .get(this.$APPURL + "api/kural/" + page)

        .then((response) => (this.data = response.data))
        .catch((error) => {
          console.log(error);
        });
    },

    nextkural(page) {
      axios
        .get(this.$APPURL + "api/kural/" + page)

        .then((response) => (this.data = response.data))
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>
