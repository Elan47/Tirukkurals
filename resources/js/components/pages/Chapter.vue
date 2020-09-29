<template>
  <div class="row">
    <div class="col-md-12">
      <h2>
        <b>CHAPTERS - 133</b>
      </h2>
      <br />
      <div class="card border border-primary" v-for="chapter in chapters" :key="chapter.id">
        <div class="card-header">
          <h3>
            <b>CHAPTER : {{ chapter.id }}</b>
          </h3>
        </div>
        <div class="card-body">
          <h4>
            <span class="badge bg-primary text-white">Tamil</span>
            <br />
            <br />
            {{ chapter.tn }}
            <br />
            <br />
            <span class="badge bg-primary text-white">Transliteration</span>
            <br />
            <br />
            {{ chapter.tr }}
            <br />
            <br />
            <span class="badge bg-primary text-white">English</span>
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
