<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Main App</div>
          <div class="card-body">I'm the App component.</div>
          <div class="card-body">
            <router-link to="home" class="nav-link">Home</router-link>
            <router-link to="about" class="nav-link">About</router-link>
            <br />
            <router-view></router-view>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
