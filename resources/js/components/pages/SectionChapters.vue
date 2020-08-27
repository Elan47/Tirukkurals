<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Section - {{$route.params.id}} | Chapters</div>
          <ul>
            <span
              class="list-group-item d-flex justify-content-between align-items-center"
              v-for="chapter in chapters"
              :key="chapter.id"
            >
              {{ chapter.id }} | {{ chapter.tn }} / {{ chapter.tr }} / {{ chapter.en }}
              <br />
              <button class="btn btn-info" @click="trigger(chapter.id)">Kurals</button>
            </span>
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
