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
                {{ section.tn }} / {{ section.tr }} / {{ section.en }}
                <br />
                ChapterGroups-{{section.cg}} | Chapters-{{section.c}} | Kurals-{{section.k}}
                <br />

                <button class="btn btn-info" @click="trigger(section.id)">
                  {{section.chaps}} Chapters
                  <br />
                  ( {{section.fr}} - {{section.to}} )
                </button>
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
      .get(this.$APPURL + "api/sections")
      .then((response) => (this.sections = response.data.data));
  },
  methods: {
    trigger(id) {
      router.push({
        path: this.$APPURL + `section-chapters/${id}`,
      });
    },
  },
};
</script>
