<template>
  <div class="row">
    <div class="col-md-12">
      <h2>
        <b>CHAPTERS - 133</b>
      </h2>
      <br />
      <div class="card" v-for="chapter in chapters" :key="chapter.id">
        <div
          class="card-header bg-dark text-white"
          data-toggle="collapse"
          :data-target="'#accordian' + chapter.id"
          aria-expanded="false"
          :aria-controls="'accordian' + chapter.id"
        >
          <h3>
            <b>CHAPTER : {{ chapter.id }}</b>
          </h3>
        </div>
        <div class="collapse" :id="'accordian' + chapter.id">
          <div class="card-body">
            <h4>
              <span class="badge bg-primary text-white">அதிகாரம்</span>
              <br />
              <br />
              {{ chapter.tn }}
              <br />
              <br />
              <span class="badge bg-primary text-white">Adhigaaram</span>
              <br />
              <br />
              {{ chapter.tr }}
              <br />
              <br />
              <span class="badge bg-primary text-white">Chapter</span>
              <br />
              <br />
              {{ chapter.en }}
              <br />
              <br />
              <button class="btn btn-info btn-lg" @click="trigger(chapter.id)">
                <b>VIEW KURALS</b>
              </button>
            </h4>
          </div>
        </div>
      </div>
      <br />
    </div>
  </div>
</template>

<script>
import router from "../../router";
export default {
  data() {
    return {
      chapters: [],
    };
  },

  mounted() {
    axios
      .get(this.$APPURL + "api/chapters")
      .then((response) => (this.chapters = response.data.data));
  },
  methods: {
    trigger(id) {
      router.push({
        path: this.$APPURL + `chapter-kurals/${id}`,
      });
    },
  },
};
</script>
