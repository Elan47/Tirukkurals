<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Chapter Group - {{$route.params.id}} | Chapters</div>

          <p v-for="chapter in chapters" :key="chapter.id">
            <span class="list-group-item d-flex justify-content-between align-items-center">
              {{ chapter.id }}
              &nbsp&nbsp&nbsp{{ chapter.tamil }}
              <button
                class="btn btn-info"
                @click="trigger(chapter.id)"
              >Kurals</button>
            </span>
          </p>
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
        "http://localhost/vue-kurals/public/api/chapter-group/" +
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
