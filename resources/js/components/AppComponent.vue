<template>
  <div class>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <router-link
            :to="{name:'sections'}"
            data-toggle="collapse"
            data-target=".navbar-collapse.show"
            class="nav-item nav-link"
          >Sections</router-link>
          <router-link
            :to="{name:'chapter-groups'}"
            data-toggle="collapse"
            data-target=".navbar-collapse.show"
            class="nav-item nav-link"
          >Chapter Groups</router-link>
          <router-link
            :to="{name:'chapters'}"
            data-toggle="collapse"
            data-target=".navbar-collapse.show"
            class="nav-item nav-link"
          >Chapters</router-link>
          <router-link
            :to="{name:'kurals'}"
            data-toggle="collapse"
            data-target=".navbar-collapse.show"
            class="nav-item nav-link"
          >Kurals</router-link>
          <router-link
            :to="{name:'search'}"
            data-toggle="collapse"
            data-target=".navbar-collapse.show"
            class="nav-item nav-link"
          >Search</router-link>
        </div>
      </div>
    </nav>

    <div class="container">
      <br />
      <h1 style="text-align:center">Thirukkurals</h1>
      <transition enter-active-class="animate__animated animate__fadeInRight">
        <router-view></router-view>
      </transition>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Welcome Home!");
  },
};
</script>
