<template>
  <div class="row">
    <div class="col-md-12">
      <h2>
        <b>CHAPTER GROUPS - 13</b>
      </h2>
      <br />
      <div
        class="card"
        v-for="chaptergroup in chaptergroups"
        :key="chaptergroup.id"
      >
        <div
          class="card-header bg-grad text-white"
          data-toggle="collapse"
          :data-target="'#accordian' + chaptergroup.id"
          aria-expanded="false"
          :aria-controls="'accordian' + chaptergroup.id"
        >
          <h3>
            <b>CHAPTER GROUP : {{ chaptergroup.id }}</b>
          </h3>
        </div>
        <div class="collapse" :id="'accordian' + chaptergroup.id">
          <div class="card-body">
            <h4>
              <span class="badge bg-grad text-white">இயல்</span>
              <br />
              <br />
              {{ chaptergroup.tn }}
              <br />
              <br />
              <span class="badge bg-grad text-white">Iyal</span>
              <br />
              <br />
              {{ chaptergroup.tr }}
              <br />
              <br />
              <span class="badge bg-grad text-white">Chapter Group</span>
              <br />
              <br />
              {{ chaptergroup.en }}
              <br />
              <br />
              <li class="list-group-item border border-dark">
                Chapters : {{ chaptergroup.chaps }} ({{ chaptergroup.fr }} -
                {{ chaptergroup.to }})
              </li>
              <br />
              <br />
              <button
                class="btn btn-lg btn-info"
                @click="trigger(chaptergroup.id)"
              >
                <b>
                  <span v-if="chaptergroup.chaps > 1">VIEW CHAPTERS</span>
                  <span v-if="chaptergroup.chaps == 1">VIEW CHAPTER</span>
                </b>
              </button>
            </h4>
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
