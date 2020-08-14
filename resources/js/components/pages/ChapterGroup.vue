<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Chapter Groups</div>
          <!-- <div class="card-body">{{kurals[0]}}</div> -->

          <p v-for="chaptergroup in chaptergroups" :key="chaptergroup.id">
            <span class="list-group-item d-flex justify-content-between align-items-center">
              {{ chaptergroup.id }} | {{ chaptergroup.tn }}
              <button
                class="btn btn-info"
                @click="trigger(chaptergroup.id)"
              >Chapters</button>
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
      chaptergroups: [],
    };
  },
  mounted() {
    axios
      .get("http://localhost/vue-kurals/public/api/chapter-groups")
      .then((response) => (this.chaptergroups = response.data.data));
  },
  methods: {
    trigger(id) {
      router.push({
        path: `/vue-kurals/public/chapter-group-chapters/${id}`,
      });
    },
  },
};
</script>
