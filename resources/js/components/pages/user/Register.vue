<template>
  <div class="container-fluid">
    <div class="col-12">
      <h2 class="lime ignore"><b>REGISTER</b></h2>
      <br />
      <br />
    </div>
    <form>
      <div class="form-group">
        <label class="lime ignore" for="name">Name</label>

        <input
          class="form-control"
          placeholder="Name"
          type="text"
          v-model="form.name"
        />
        <span class="form-text text-muted" v-if="errors.name">{{
          errors.name[0]
        }}</span>
      </div>
      <div class="form-group">
        <label class="lime ignore" for="email">Your e-mail</label>
        <input
          class="form-control"
          placeholder="Email"
          type="email"
          v-model="form.email"
        />
      </div>
      <span class="form-text text-muted" v-if="errors.email">{{
        errors.email[0]
      }}</span>
      <div class="form-group">
        <label class="lime ignore" for="password">Password</label>
        <input
          class="form-control"
          placeholder="Password"
          type="password"
          v-model="form.password"
          name="password"
        />
      </div>
      <span class="form-text text-muted" v-if="errors.password">{{
        errors.password[0]
      }}</span>
      <div class="form-group">
        <label class="lime ignore" for="confirm_password"
          >Confirm Password</label
        >
        <input
          class="form-control"
          placeholder="Confirm Password"
          type="password"
          v-model="form.password_confirmation"
          name="password_confirmation"
        />
        <span
          class="form-text text-muted"
          v-if="errors.password_confirmation"
          >{{ errors.password_confirmation[0] }}</span
        >
        <br />
        <br />
      </div>
      <div class="form-group">
        <button
          @click.prevent="saveForm"
          type="submit"
          class="btn bg-lime text-white ignore"
        >
          Create
        </button>
        <router-link :to="{ name: 'login' }"
          ><button class="text-white btn bg-grad ignore">
            Already have Account
          </button></router-link
        >
      </div>
    </form>
  </div>
</template>
<script>
export default {
  data() {
    return {
      form: {
        name: "",
        email: "",
        password: "",
        password_confirmation: "",
      },
      errors: [],
    };
  },
  methods: {
    saveForm() {
      axios
        .post("api/register", this.form)
        .then(() => {
          this.$router.push({ name: "search" });
          console.log("saved");
        })
        .catch((error) => {
          this.errors = error.response.data.errors;
        });
    },
  },
};
</script>
