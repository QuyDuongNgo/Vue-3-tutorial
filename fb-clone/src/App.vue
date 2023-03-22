<script>
import defaultLayout from "./layouts/default.vue";
export default {
  components: {
    defaultLayout,
  },
};
</script>

<template>
  <defaultLayout>
    <router-view></router-view>
  </defaultLayout>
</template>
