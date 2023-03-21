<template>
  <div>
    <Header />
    <router-view />
  </div>
</template>

<script>
import Headers from "./components/common/layouts/Header";
export default {
  components: {
    Headers,
  },
};
</script>

<style></style>
