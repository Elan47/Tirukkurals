<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Sections</div>
          <!-- <div class="card-body">{{kurals[0]}}</div> -->
          <ol>
            <li v-for="section in sections" :key="section.id">
              <span class="list-group-item d-flex justify-content-between align-items-center">
                {{ section.tamil }}
                <button
                  class="btn btn-info"
                  @click="trigger(section.id)"
                >Chapters</button>
              </span>
            </li>
          </ol>
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
      sections: [],
    };
  },
  mounted() {
    axios
      .get("http://localhost/vue-kurals/public/api/sections")
      .then((response) => (this.sections = response.data.data));
  },
  methods: {
    trigger(id) {
      router.push({
        path: `/vue-kurals/public/section-chapters/${id}`,
      });
    },
  },
};
</script>
