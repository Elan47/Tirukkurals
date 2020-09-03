<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
          >
            Search
            <i class="fa fa-search"></i>
          </router-link>
        </div>
      </div>
    </nav>

    <div class="container">
      <h1 style="text-align:center">Thirukkurals</h1>
      <transition enter-active-class="animate__animated animate__fadeInRight">
        <router-view></router-view>
      </transition>
    </div>
  </div>
</template>

<script>
import Darkmode from "darkmode-js";

const options = {
  //   top: "100px",
  bottom: "10px", // default: '32px'
  right: "10px", // default: '32px'
  //   left: "32px", // default: 'unset'
  time: ".5s", // default: '0.3s'
  mixColor: "#fff", // default: '#fff'
  backgroundColor: "#fff", // default: '#fff'
  buttonColorDark: "#100f2c", // default: '#100f2c'
  buttonColorLight: "white", // default: '#fff'
  saveInCookies: true, // default: true,
  label: "🌓", // default: ''
  autoMatchOsTheme: true, // default: true
};

const darkmode = new Darkmode(options);
darkmode.showWidget();

export default {
  mounted() {
    console.log("Welcome Home!");
  },
};
</script>


<style >
.darkmode-layer,
.darkmode-toggle {
  z-index: 500;
}
</style>
