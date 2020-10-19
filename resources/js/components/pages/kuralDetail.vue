<template>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header border-darkng rounded">
          <h4 class="lime ignore"><b>SHARE</b></h4>

          <div class="collapse" id="collapseshare">
            <ShareNetwork
              network="facebook"
              url="https://news.vuejs.org/issues/180"
              :title="this.data[0].kural_en"
              :description="this.data[0].en_explanation"
              :quote="this.data[0].kural_tn"
            >
              <lottie-player
                src="http://localhost/vue-kurals/public/assets/lottie/facebook.json"
                background="transparent"
                speed="1"
                style="height: 20px"
                autoplay
                loop
              ></lottie-player>
            </ShareNetwork>
            <br />
            <ShareNetwork
              network="twitter"
              url="https://www.npmjs.com/package/vue-social-sharing"
              :title="this.data[0].kural_en"
              :description="this.data[0].en_explanation"
              :quote="this.data[0].kural_tn"
            >
              <lottie-player
                src="http://localhost/vue-kurals/public/assets/lottie/twitter.json"
                background="transparent"
                speed="1"
                style="height: 20px"
                autoplay
                loop
              ></lottie-player>
            </ShareNetwork>
            <br />
            <ShareNetwork
              network="whatsapp"
              url="https://www.npmjs.com/package/vue-social-sharing"
              :title="this.data[0].kural_en"
              :description="this.data[0].en_explanation"
            >
              <lottie-player
                src="http://localhost/vue-kurals/public/assets/lottie/whatsapp.json"
                background="transparent"
                speed="1"
                style="height: 20px"
                autoplay
                loop
              ></lottie-player>
            </ShareNetwork>
            <br />
            <ShareNetwork
              network="linkedin"
              url="https://www.npmjs.com/package/vue-social-sharing"
              :title="this.data[0].kural_en"
            >
              <lottie-player
                src="http://localhost/vue-kurals/public/assets/lottie/linkedin.json"
                background="transparent"
                speed="1"
                style="height: 20px"
                autoplay
                loop
              ></lottie-player>
            </ShareNetwork>
            <br />
            <!-- </div> -->
          </div>

          <button
            class="btn bg-lime text-white ignore"
            type="button"
            data-toggle="collapse"
            data-target="#collapseshare"
            aria-expanded="false"
            aria-controls="collapseshare"
          >
            <lottie-player
              src="http://localhost/vue-kurals/public/assets/lottie/share.json"
              background="transparent"
              speed="3"
              style="height: 20px; width: 20px"
              autoplay
              loop
            ></lottie-player>
          </button>
          <br />
          <br />
          <button
            v-if="data[0].kural_no <= 1"
            class="btn bg-lime text-white disabled ignore"
          >
            Prev
          </button>
          <button
            v-if="data[0].kural_no - 1 > 0"
            class="btn bg-lime text-white ignore"
            @click="prevkural(data[0].kural_no - 1)"
          >
            Prev
          </button>
          <button
            v-if="data[0].kural_no + 1 <= 1330"
            class="btn bg-lime text-white ignore"
            @click="nextkural(data[0].kural_no + 1)"
          >
            Next
          </button>
          <button
            v-if="data[0].kural_no == 1330"
            class="btn bg-lime text-white disabled ignore"
          >
            Next
          </button>
        </div>

        <div class="card-body border-darkng rounded">
          <h3 class="lime ignore">
            <b>KURAL : {{ data[0].kural_no }}</b>
          </h3>
          <audio id="aud" class="rounded" controls controlslist="nodownload">
            <source :src="audiofile" type="audio/mpeg" />
          </audio>
          <h4>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <span class="badge bg-grad text-white ignore">குறள்</span>
                <br />
                <br />
                {{ data[0].kural_tn }}
                <br />
                <br />
              </li>
              <li class="list-group-item">
                <span class="badge bg-grad text-white ignore">Kural</span>
                <br />
                <br />
                {{ data[0].kural_tr }}
                <br />
                <br />
              </li>
              <li class="list-group-item">
                <span class="badge bg-grad text-white ignore">Couplet</span>
                <br />
                <br />
                {{ data[0].kural_en }}
                <br />
                <br />
              </li>
              <li class="list-group-item">
                <span class="badge bg-grad text-white ignore">Explanation</span>

                <br />
                <br />
                {{ data[0].en_explanation }}
              </li>
              <br />
              <div class="collapse" id="collapseExample">
                <h3 class="lime ignore">
                  <b>Famous Explanations</b>
                </h3>
                <br />

                <img
                  class="img-fluid rounded ignore dashed-border bg-grad"
                  src="http://localhost/vue-kurals/public/assets/12.jpg"
                />
                <br />

                <span class="badge bg-grad text-white ignore">Kalaignar</span>
                <br />
                <br />

                <p>{{ data[0].tamil_poet_3 }}</p>
                <br />
                <br />
                <img
                  class="img-fluid rounded ignore dashed-border bg-grad"
                  src="http://localhost/vue-kurals/public/assets/13.jpg"
                />
                <br />
                <span class="badge bg-grad text-white ignore"
                  >Mu.Varadharasanar</span
                >
                <br />
                <br />
                <p>{{ data[0].tamil_poet_1 }}</p>
                <br />
                <br />
                <img
                  class="img-fluid rounded ignore dashed-border bg-grad"
                  src="http://localhost/vue-kurals/public/assets/11.jpg"
                />
                <br />

                <span class="badge bg-grad text-white ignore"
                  >Solomon Paapaiya</span
                >
                <br />
                <br />
                <p>{{ data[0].tamil_poet_2 }}</p>
                <br />
              </div>

              <button
                @click="showMore"
                class="btn bg-lime text-white btn-lg ignore"
                type="button"
                data-toggle="collapse"
                data-target="#collapseExample"
                aria-expanded="false"
                aria-controls="collapseExample"
              >
                <b>{{ this.show }}</b>
              </button>
              <li class="list-group-item"></li>
              <br />

              <li class="list-group-item">
                <h3 class="lime ignore">
                  <b>CHAPTER : {{ data[1].chap_no }}</b>
                </h3>

                <br />
                <span class="badge bg-grad text-white ignore">Tamil</span>
                <br />
                <br />
                {{ data[1].chap_tn }}
                <br />
                <br />
                <span class="badge bg-grad text-white ignore"
                  >Transliteration</span
                >
                <br />
                <br />
                {{ data[1].chap_tr }}
                <br />
                <br />
                <span class="badge bg-grad text-white ignore">English</span>
                <br />
                <br />
                {{ data[1].chap_en }}
                <br />
              </li>
              <br />
              <li class="list-group-item">
                <h3 class="lime ignore">
                  <b>CHAPTER GROUP : {{ data[2].chap_grp_no }}</b>
                </h3>

                <br />

                <span class="badge bg-grad text-white ignore">Tamil</span>
                <br />
                <br />
                {{ data[2].chap_grp_tn }}
                <br />
                <br />

                <span class="badge bg-grad text-white ignore"
                  >Transliteration</span
                >
                <br />
                <br />
                {{ data[2].chap_grp_tr }}
                <br />
                <br />

                <span class="badge bg-grad text-white ignore">English</span>
                <br />
                <br />
                {{ data[2].chap_grp_en }}
                <br />
              </li>
              <br />
              <li class="list-group-item">
                <h3 class="lime ignore">
                  <b>SECTION : {{ data[3].section_no }}</b>
                </h3>
                <br />
                <span class="badge bg-grad text-white ignore">Tamil</span>
                <br />
                <br />
                {{ data[3].section_tn }}
                <br />
                <br />
                <span class="badge bg-grad text-white ignore"
                  >Transliteration</span
                >
                <br />
                <br />
                {{ data[3].section_tr }}
                <br />
                <br />
                <span class="badge bg-grad text-white ignore">English</span>
                <br />
                <br />
                {{ data[3].section_en }}
                <br />
              </li>
            </ul>
          </h4>
        </div>

        <!-- <br /> -->

        <div class="card-footer border-darkng rounded">
          <h4 class="lime ignore"><b>SHARE</b></h4>
          <div class="collapse" id="collapseshare">
            <!-- <div class="card card-body border border-primary"> -->
            <ShareNetwork
              network="facebook"
              url="https://news.vuejs.org/issues/180"
              :title="this.data[0].kural_en"
              :description="this.data[0].en_explanation"
              :quote="this.data[0].kural_tn"
            >
              <lottie-player
                src="http://localhost/vue-kurals/public/assets/lottie/facebook.json"
                background="transparent"
                speed="1"
                style="height: 20px"
                autoplay
                loop
              ></lottie-player>
            </ShareNetwork>
            <br />
            <ShareNetwork
              network="twitter"
              url="https://www.npmjs.com/package/vue-social-sharing"
              :title="this.data[0].kural_en"
              :description="this.data[0].en_explanation"
              :quote="this.data[0].kural_tn"
            >
              <lottie-player
                src="http://localhost/vue-kurals/public/assets/lottie/twitter.json"
                background="transparent"
                speed="1"
                style="height: 20px"
                autoplay
                loop
              ></lottie-player>
            </ShareNetwork>
            <br />
            <ShareNetwork
              network="whatsapp"
              url="https://www.npmjs.com/package/vue-social-sharing"
              :title="this.data[0].kural_en"
              :description="this.data[0].en_explanation"
               :quote="this.data[0].kural_tn"
            >
              <lottie-player
                src="http://localhost/vue-kurals/public/assets/lottie/whatsapp.json"
                background="transparent"
                speed="1"
                style="height: 20px"
                autoplay
                loop
              ></lottie-player>
            </ShareNetwork>
            <br />
            <ShareNetwork
              network="linkedin"
              url="https://www.npmjs.com/package/vue-social-sharing"
              :title="this.data[0].kural_en"
            >
              <lottie-player
                src="http://localhost/vue-kurals/public/assets/lottie/linkedin.json"
                background="transparent"
                speed="1"
                style="height: 20px"
                autoplay
                loop
              ></lottie-player>
            </ShareNetwork>
            <br />
            <!-- </div> -->
          </div>
          <button
            class="btn bg-lime ignore"
            type="button"
            data-toggle="collapse"
            data-target="#collapseshare"
            aria-expanded="false"
            aria-controls="collapseshare"
          >
            <lottie-player
              src="http://localhost/vue-kurals/public/assets/lottie/share.json"
              background="transparent"
              speed="1"
              style="height: 20px; width: 20px"
              autoplay
              loop
            ></lottie-player>
          </button>
        </div>
      </div>
      <br />
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      show: "More Explanations",
      audiofile: this.audiofile,

      title: [],
      description: [],
      quote: [],
      data: this.data,
    };
  },
  created() {
    this.getkural(this.$route.params.id);
  },

  methods: {
    showMore() {
      if (this.show === "More Explanations") {
        this.show = "Show Less";
      } else {
        this.show = "More Explanations";
      }
    },
    getkural(page) {
      this.audiofile = this.$APPURL + "assets/audio/kural" + page + ".mp3";

      axios
        .get(this.$APPURL + "api/kural/" + page)

        .then((response) => (this.data = response.data))

        .catch((error) => {
          console.log(error);
        });
    },
    prevkural(page) {
      this.audiofile = this.$APPURL + "assets/audio/kural" + page + ".mp3";
      document.getElementById("aud").load();
      axios
        .get(this.$APPURL + "api/kural/" + page)

        .then((response) => (this.data = response.data))

        .catch((error) => {
          console.log(error);
        });
    },

    nextkural(page) {
      this.audiofile = this.$APPURL + "assets/audio/kural" + page + ".mp3";
      document.getElementById("aud").load();
      axios

        .get(this.$APPURL + "api/kural/" + page)

        .then((response) => (this.data = response.data))

        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>

