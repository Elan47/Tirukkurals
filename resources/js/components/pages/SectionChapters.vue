<template>
  <div class="row justify-content-center">
    <div class="col-md-12">
      <h3>
        <b>SECTION : {{$route.params.id}} | CHAPTERS</b>
      </h3>
      <div class="card border border-primary" v-for="chapter in chapters" :key="chapter.id">
        <div class="card-header">
          <h4>
            <b>CHAPTER : {{ chapter.id }}</b>
          </h4>
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
      .get(this.$APPURL + "api/section/" + this.$route.params.id)
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
