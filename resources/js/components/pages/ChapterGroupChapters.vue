<template>
  <div class="row">
    <div class="col-md-12">
      <h2 class="lime ignore">
        <b>CHAPTER GROUP : {{ $route.params.id }}</b>
      </h2>
      <br />
      <div v-for="chapter in chapters" :key="chapter.id" class="card">
        <div
          class="card-header bg-grad text-white ignore"
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
              <span class="badge bg-grad text-white ignore">அதிகாரம்</span>
              <br />
              <br />
              {{ chapter.tn }}
              <br />
              <br />
              <span class="badge bg-grad text-white ignore">Adhigaaram</span>
              <br />
              <br />
              {{ chapter.tr }}
              <br />
              <br />
              <span class="badge bg-grad text-white ignore">Chapter</span>
              <br />
              <br />
              {{ chapter.en }}
              <br />
              <br />
              <button
                class="btn bg-lime text-white ignore"
                @click="trigger(chapter.id)"
              >
                <b>VIEW KURALS</b>
              </button>
            </h4>
            <br />
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
      .get(this.$APPURL + "api/chapter-group/" + this.$route.params.id)
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
