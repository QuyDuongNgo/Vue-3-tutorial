<template>
  <Header></Header>
  <div class="container">
    <SideBar></SideBar>
    <slot></slot>
    <RightSide></RightSide>
  </div>
</template>

<script>
import Header from "../components/common/layouts/Header.vue";
import SideBar from "../components/common/layouts/SideBar.vue";
import RightSide from "../components/common/layouts/RightSide.vue";
export default {
  components: {
    Header,
    SideBar,
    RightSide,
  },
};
</script>

<style></style>
