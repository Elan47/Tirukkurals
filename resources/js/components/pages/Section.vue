<template>
  <div class="row">
    <div class="col-md-12">
      <h2 class="lime ignore">
        <b>SECTIONS - 3</b>
      </h2>
      <br />
      <div v-for="section in sections" :key="section.id" class="card rounded">
        <div
          class="card-header ignore bg-grad text-white"
          data-toggle="collapse"
          :data-target="'#accordian' + section.id"
          aria-expanded="false"
          :aria-controls="'accordian' + section.id"
        >
          <h3>
            <b>SECTION : {{ section.id }}</b>
          </h3>
        </div>
        <div class="collapse" :id="'accordian' + section.id">
          <div class="card-body">
            <h4>
              <span class="badge ignore bg-grad text-white">பால்</span>
              <br />
              <br />
              {{ section.tn }}
              <br />
              <br />
              <span class="badge ignore bg-grad text-white">Paal</span>
              <br />
              <br />
              {{ section.tr }}
              <br />
              <br />
              <span class="badge ignore bg-grad text-white">Section</span>
              <br />
              <br />
              {{ section.en }}
              <br />
              <br />
              <li class="list-group-item border-darkg ignore rounded lime">
                Chapter Groups : {{ section.cg }}
              </li>
              <li class="list-group-item border-darkg ignore rounded lime">
                Chapters : {{ section.c }} ({{ section.fr }} - {{ section.to }})
              </li>
              <li class="list-group-item border-darkg ignore rounded lime">
                Kurals : {{ section.k }}
              </li>

              <br />
              <button
                class="btn ignore text-white bg-lime"
                @click="trigger(section.id)"
              >
                <b>VIEW CHAPTERS</b>
              </button>
            </h4>
          </div>
        </div>
      </div>
      <br />
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
