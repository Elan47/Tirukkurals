<template>
  <div>
    <Header />
    <div class="container-fluid">
      <div class="row text-center">
        <!-- mobile view only -->
        <div class="d-block d-md-none col-md-5">
             <lottie-player
                id="confetti"
              class="ignore "
              src="http://localhost/vue-kurals/public/assets/lottie/confetti.json"
              background="transparent"
              speed="1"
              style="height: 160px;display:none;position:absolute"
                loop
              autoplay
            ></lottie-player>
          <br />
          <h2 class="lime ignore">

            <button @click="buy"  class="ignore btn bg-lime  text-white"><b>Buy Me A Coffee!</b></button>


          </h2>

          <router-link :to="{ name: 'home' }">
            <lottie-player
            id="lottie1"

              class="ignore "
              src="http://localhost/vue-kurals/public/assets/lottie/valluvar.json"
              background="transparent"
              speed=".75"
              style="height: 300px"
              loop
              autoplay
            ></lottie-player>
            <lottie-player
            @click="afterbuy"
            id="lottie2"

              class="ignore "
              src="http://localhost/vue-kurals/public/assets/lottie/coffee.json"
              background="transparent"
              speed="1"
              style="height: 300px;display:none"
              loop
              autoplay
            ></lottie-player>
          </router-link>
          <h4 class="lime ignore">
             <h2><b >TIRUKKURALS </b></h2>

            <b
              ><router-link
                :to="{ name: 'sections' }"
                data-toggle="collapse"
                data-target=".navbar-collapse.show"
                class="nav-item nav-link lime"
                >SECTIONS : 3</router-link
              >
              <router-link
                :to="{ name: 'chapter-groups' }"
                data-toggle="collapse"
                data-target=".navbar-collapse.show"
                class="nav-item nav-link lime"
                >CHAPTER GROUPS : 13</router-link
              >
              <router-link
                :to="{ name: 'chapters' }"
                data-toggle="collapse"
                data-target=".navbar-collapse.show"
                class="nav-item nav-link lime"
                >CHAPTERS : 133</router-link
              >
              <router-link
                :to="{ name: 'kurals' }"
                data-toggle="collapse"
                data-target=".navbar-collapse.show"
                class="nav-item nav-link lime"
                >KURALS : 1330</router-link
              >

              <router-link
                :to="{ name: 'search' }"
                data-toggle="collapse"
                data-target=".navbar-collapse.show"
                class="nav-item nav-link lime"
              >
                SEARCH
                <i class="fa fa-search"></i> </router-link
            ></b>
          </h4>
        </div>
        <!-- mobile view only -->

        <!-- Web View -->
        <div class="d-none d-md-block col-md-5">

          <br />
<lottie-player
                id="confetti2"
              class="ignore "
              src="http://localhost/vue-kurals/public/assets/lottie/confetti.json"
              background="transparent"
              speed="1"
              style="height: 160px;display:none;position:absolute"
                loop
              autoplay
            ></lottie-player>
          <h2 class="sticky1 lime ignore">
            <b>TIRUKKURALS</b>
          </h2>
          <button @click="buy"  class="btn bg-lime ignore text-white"><b>Buy Me A Coffee!</b></button>

          <br>
          <router-link :to="{ name: 'home' }">
            <lottie-player
              id="lottie3"
              class="ignore sticky2"
              src="http://localhost/vue-kurals/public/assets/lottie/valluvar.json"
              background="transparent"
              speed=".75"
              style="height: 280px"
              loop
              autoplay
            ></lottie-player>
            <lottie-player
                @click="afterbuy"
                id="lottie4"
              class="ignore sticky2 "
              src="http://localhost/vue-kurals/public/assets/lottie/coffee.json"
              background="transparent"
              speed="1"
              style="height: 280px;display:none"
              loop
              autoplay
            ></lottie-player>

          </router-link>
          <h4 class="sticky3 ignore">
            <b
              ><router-link
                :to="{ name: 'sections' }"
                data-toggle="collapse"
                data-target=".navbar-collapse.show"
                class="nav-item nav-link lime"
                >SECTIONS : 3</router-link
              >
              <router-link
                :to="{ name: 'chapter-groups' }"
                data-toggle="collapse"
                data-target=".navbar-collapse.show"
                class="nav-item nav-link lime"
                >CHAPTER GROUPS : 13</router-link
              >
              <router-link
                :to="{ name: 'chapters' }"
                data-toggle="collapse"
                data-target=".navbar-collapse.show"
                class="nav-item nav-link lime"
                >CHAPTERS : 133</router-link
              >
              <router-link
                :to="{ name: 'kurals' }"
                data-toggle="collapse"
                data-target=".navbar-collapse.show"
                class="nav-item nav-link lime"
                >KURALS : 1330</router-link
              >

              <router-link
                :to="{ name: 'search' }"
                data-toggle="collapse"
                data-target=".navbar-collapse.show"
                class="nav-item nav-link lime"
              >
                SEARCH
                <i class="fa fa-search"></i> </router-link
            ></b>
          </h4>
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
    <footer
      class="page-footer bg-grad d-none d-md-block d-lg-block font-small ignore"
    >
      <div class="footer-copyright text-center text-white py-2">
        © 2020 Tirukkural. Made by <b><a style="color:white" target="_blank" href="https://www.buymeacoffee.com/Elanchez">Elanchez</a></b>
      </div>
      <!-- Copyright -->
    </footer>
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

export default {
    data(){
        return{


        }
    },
  created() {
    this.home();

  },
  methods: {
      buy(){
          window.open("https://www.buymeacoffee.com/Elanchez", "_blank", "toolbar=yes,top=500,left=500,width=600,height=1000");
        document.getElementById("lottie1").style.display = "none";
        document.getElementById("lottie3").style.display = "none";
        document.getElementById("lottie2").style.display = "block";
        document.getElementById("lottie4").style.display = "block";
        document.getElementById("confetti").style.display = "block";
        document.getElementById("confetti2").style.display = "block";
        },
      afterbuy(){

          document.getElementById("lottie2").style.display = "none";
          document.getElementById("lottie4").style.display = "none";
          document.getElementById("lottie1").style.display = "block";
          document.getElementById("lottie3").style.display = "block";

        document.getElementById("confetti").style.display = "none";
        document.getElementById("confetti2").style.display = "none";
          },

    home() {
      this.$router.push({ name: "home" });
    },
  },
};
</script>


<style >
/* .darkmode-layer,
.darkmode-toggle {
  z-index: 500;
} */
</style>
