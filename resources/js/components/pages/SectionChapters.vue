<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Section - {{$route.params.id}} | Chapters</div>
          <ul>
            <p v-for="chapter in chapters" :key="chapter.id">
              {{ chapter.id }} | {{ chapter.tamil }}
              <br />
              {{ chapter.english }}
              <br />
              <button class="btn btn-info" @click="trigger(chapter.id)">Kurals</button>
            </p>
          </ul>
        </div>
      </div>
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
      .get(
        "http://localhost/vue-kurals/public/api/section/" +
          this.$route.params.id
      )
      .then((response) => (this.chapters = response.data.data));
  },
  methods: {
    trigger(id) {
      router.push({
        path: `/vue-kurals/public/chapter-kurals/${id}`,
      });
    },
  },
};
</script>
