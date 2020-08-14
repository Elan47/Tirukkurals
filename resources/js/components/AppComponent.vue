<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Thirukkural App</div>

          <div class="card-body">
            <router-link :to="{name:'sections'}" class="nav-link">Sections</router-link>
            <router-link :to="{name:'chapter-groups'}" class="nav-link">Chapter Groups</router-link>
            <router-link :to="{name:'chapters'}" class="nav-link">Chapters</router-link>
            <router-link :to="{name:'kurals'}" class="nav-link">Kurals</router-link>
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
