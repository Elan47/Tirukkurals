
<template>
  <div>
    <!-- <nav class="navbar d-block d-md-none text-center navbar-expand-lg navbar-dark bg-dark"> -->
    <nav
      class="navbar darkmode--activated ignore text-center navbar-expand-md navbar-expand-lg navbar-expand-xl navbar-dark bg-grad"
    >
      <button
        @click.prevent="lottieplay"
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <lottie-player
          mode="normal"
          speed="3"
          src="http://localhost/vue-kurals/public/assets/lottie/nav.json"
          style="height: 20px"
        ></lottie-player>
      </button>
      <div
        class="collapse navbar-collapse justify-content-center"
        id="navbarNavAltMarkup"
      >
        <!-- <span v-if="user" class="badge text-white float-left">{{
          this.user.name
        }}</span> -->

        <div class="navbar-nav" @click="lottieplay">
          <router-link
            :to="{ name: 'search' }"
            data-toggle="collapse"
            data-target=".navbar-collapse.show"
            class="nav-item nav-link"
          >
            <b>Search</b>
            <i class="fa fa-search"></i>
          </router-link>
          <router-link
            :to="{ name: 'sections' }"
            data-toggle="collapse"
            data-target=".navbar-collapse.show"
            class="nav-item nav-link"
            ><b>Sections</b></router-link
          >
          <router-link
            :to="{ name: 'chapter-groups' }"
            data-toggle="collapse"
            data-target=".navbar-collapse.show"
            class="nav-item nav-link"
            ><b>Chapter Groups</b></router-link
          >
          <router-link
            :to="{ name: 'chapters' }"
            data-toggle="collapse"
            data-target=".navbar-collapse.show"
            class="nav-item nav-link"
            ><b>Chapters</b></router-link
          >
          <router-link
            :to="{ name: 'kurals' }"
            data-toggle="collapse"
            data-target=".navbar-collapse.show"
            class="nav-item nav-link"
            ><b>Kurals</b></router-link
          >
        </div>
      </div>
    </nav>
  </div>
</template>
<script>
export default {
  data() {
    return {
      direction: 1,
      user: null,
    };
  },

  methods: {
    //   breadcrumb lottie animation
    lottieplay() {
      const player = document.querySelector("lottie-player");
      player.setDirection(this.direction);
      player.play();
      this.direction *= -1;
    },
  },
  mounted() {
    axios.get("api/user").then((res) => {
      this.user = res.data;
    });
  },
};
</script>
