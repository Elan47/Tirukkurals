<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Chapter Groups</div>
          <!-- <div class="card-body">{{kurals[0]}}</div> -->

          <p v-for="chaptergroup in chaptergroups" :key="chaptergroup.id">
            <span class="list-group-item d-flex justify-content-between align-items-center">
              {{ chaptergroup.id }} | {{ chaptergroup.tn }} / {{ chaptergroup.tr }} / {{ chaptergroup.en }}
              <br />
              Chapters - {{chaptergroup.chaps}} ( {{chaptergroup.fr}} - {{chaptergroup.to}} )
              <button
                class="btn btn-info"
                @click="trigger(chaptergroup.id)"
              >
                {{chaptergroup.chaps}}
                <span v-if="chaptergroup.chaps>1">Chapters</span>
                <span v-if="chaptergroup.chaps==1">Chapter</span>
                <br />
                <span
                  v-if="chaptergroup.to>chaptergroup.fr"
                >( {{chaptergroup.fr}} - {{chaptergroup.to}} )</span>
                <span v-if="chaptergroup.fr==chaptergroup.to">( {{chaptergroup.fr}} )</span>
              </button>
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
      .get(this.$APPURL + "api/chapter-groups")
      .then((response) => (this.chaptergroups = response.data.data));
  },
  methods: {
    trigger(id) {
      router.push({
        path: this.$APPURL + `chapter-group-chapters/${id}`,
      });
    },
  },
};
</script>
