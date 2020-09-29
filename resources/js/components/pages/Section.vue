<template>
  <div class="row">
    <div class="col-md-12">
      <h2>
        <b>SECTIONS - 3</b>
      </h2>
      <br />
      <div v-for="section in sections" :key="section.id" class="card border border-primary rounded">
        <div class="card-header">
          <h3>
            <b>SECTION : {{section.id}}</b>
          </h3>
        </div>
        <div class="card-body">
          <h4>
            <span class="badge bg-primary text-white">Tamil</span>
            <br />
            <br />
            {{ section.tn }}
            <br />
            <br />
            <span class="badge bg-primary text-white">Transliteration</span>
            <br />
            <br />
            {{ section.tr }}
            <br />
            <br />
            <span class="badge bg-primary text-white">English</span>
            <br />
            <br />
            {{ section.en }}
            <br />
            <br />
            <li
              class="list-group-item border border-primary rounded"
            >Chapter Groups : {{section.cg}}</li>
            <li
              class="list-group-item border border-primary rounded"
            >Chapters : {{section.c}} ({{section.fr}} - {{section.to}})</li>
            <li class="list-group-item border border-primary rounded">Kurals : {{section.k}}</li>

            <br />
            <button class="btn btn-lg btn-info" @click="trigger(section.id)">
              <b>VIEW CHAPTERS</b>
            </button>
          </h4>
        </div>
        <br />
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
