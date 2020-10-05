<template>
  <div>
    <Header />
    <div class="container-fluid">
      <div class="row text-center">
        <!-- mobile view only -->
        <div class="d-block d-md-none col-md-5">
          <br />
          <h2>
            <b>THIRUKKURALS</b>
          </h2>
          <router-link :to="{ name: 'home' }">
            <lottie-player
              class="ignore"
              src="http://localhost/vue-kurals/public/assets/lottie/data.json"
              background="transparent"
              speed="1"
              style="height: 200px"
              loop
              autoplay
            ></lottie-player>
          </router-link>
        </div>
        <!-- mobile view only -->

        <!-- Web View -->
        <div class="d-none d-md-block col-md-5">
          <br />
          <h2 class="sticky1">
            <b>THIRUKKURALS</b>
          </h2>
          <router-link :to="{ name: 'home' }">
            <lottie-player
              class="ignore sticky2"
              src="http://localhost/vue-kurals/public/assets/lottie/data.json"
              background="transparent"
              speed="1"
              style="height: 300px"
              loop
              autoplay
            ></lottie-player>
          </router-link>
          <h3 class="sticky3">
            <router-link
              :to="{ name: 'sections' }"
              data-toggle="collapse"
              data-target=".navbar-collapse.show"
              class="nav-item nav-link lime"
              >Sections : 3</router-link
            >
            <router-link
              :to="{ name: 'chapter-groups' }"
              data-toggle="collapse"
              data-target=".navbar-collapse.show"
              class="nav-item nav-link lime"
              >Chapter Groups : 13</router-link
            >
            <router-link
              :to="{ name: 'chapters' }"
              data-toggle="collapse"
              data-target=".navbar-collapse.show"
              class="nav-item nav-link lime"
              >Chapters : 133</router-link
            >
            <router-link
              :to="{ name: 'kurals' }"
              data-toggle="collapse"
              data-target=".navbar-collapse.show"
              class="nav-item nav-link lime"
              >Kurals : 1330</router-link
            >

            <router-link
              :to="{ name: 'search' }"
              data-toggle="collapse"
              data-target=".navbar-collapse.show"
              class="nav-item nav-link lime"
            >
              Search
              <i class="fa fa-search"></i>
            </router-link>
          </h3>
        </div>

        <div class="col-12 col-md-7">
          <br />
          <transition
            enter-active-class="animate__animated animate__fadeInRight"
          >
            <router-view></router-view>
          </transition>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Darkmode from "darkmode-js";

const options = {
  top: "100px",
  //   bottom: "10px", // default: '32px'
  right: "20px", // default: '32px'
  //   left: "32px", // default: 'unset'
  time: ".3s", // default: '0.3s'
  mixColor: "white", // default: '#fff'
  backgroundColor: "#fff", // default: '#fff'
  buttonColorDark: "#100f2c", // default: '#100f2c'
  buttonColorLight: "white", // default: '#fff'
  saveInCookies: true, // default: true,
  label: "🌓", // default: ''
  autoMatchOsTheme: true, // default: true
};

const darkmode = new Darkmode(options);
darkmode.showWidget();

export default {};
</script>


<style >
/* .darkmode-layer,
.darkmode-toggle {
  z-index: 500;
} */
</style>
