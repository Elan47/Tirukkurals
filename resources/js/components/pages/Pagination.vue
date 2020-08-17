<template>
  <nav aria-label="Page navigation example">
    <!-- {{meta}} -->
    <br />
    {{links}}
    <ul class="pagination">
      <!-- <li class="page-item">
        <a class="page-link" href="#">Previous</a>
      </li>-->
      <li class="page-item" v-for="p in meta.last_page" :key="p">
        <a class="page-link" href="#" @click.prevent="changePage(p)">{{p}}</a>
      </li>
      <!-- <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>-->
    </ul>
  </nav>
</template>
<script>
export default {
  props: ["meta", "links"],
  data() {
    return {};
  },
  methods: {
    changePage(page) {
      this.$emit("paginate", page);
    },
  },
};
</script>
<!-- This pagination method didn't work -->
          <!-- Reference https://www.youtube.com/watch?v=CfDvhuSB0rc -->
