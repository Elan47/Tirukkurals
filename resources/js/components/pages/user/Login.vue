<template>
  <div class="container-fluid text-center">
    <h2 class="lime ignore"><b>LOGIN</b></h2>
    <br />
    <form>
      <div class="form-group">
        <label class="lime ignore" for="email">Email address</label>
        <input
          type="email"
          class="form-control"
          name="email"
          v-model="form.email"
          placeholder="Enter email"
        />
        <small v-if="errors.email" class="form-text text-muted">{{
          errors.email[0]
        }}</small>

        <label class="lime ignore" for="password">Password</label>
        <input
          class="form-control"
          placeholder="Password"
          type="password"
          v-model="form.password"
          name="password"
        />
        <small v-if="errors.password" class="form-text text-muted">{{
          errors.password[0]
        }}</small>
      </div>

      <button
        @click.prevent="loginUser"
        type="submit"
        class="text-white btn bg-lime ignore"
      >
        Login
      </button>

      <router-link :to="{ name: 'register' }"
        ><button class="text-white btn bg-grad ignore">
          Create an Account
        </button></router-link
      >
    </form>
    <br />
    <br />
    <br />
  </div>
</template>
<script>
export default {
  data() {
    return {
      form: {
        email: "",
        password: "",
      },
      errors: [],
    };
  },
  methods: {
    loginUser() {
      axios
        .post("api/login", this.form)
        .then(() => {
          this.$router.push({ name: "search" });
        })
        .catch((error) => {
          this.errors = error.response.data.errors;
        });
    },
  },
};
</script>
