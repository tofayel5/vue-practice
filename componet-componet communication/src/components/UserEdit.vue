<template>
  <div class="component">
    <h3>You may view the Use edit here!</h3>
    <p>Many Details.</p>
    <p>User Age:{{ userAge }}</p>
    <button @click="editAge">Edit age</button>
  </div>
</template>
<script>
import { eventBus } from "../main";
export default {
  props: ["userAge"],
  methods: {
    editAge() {
      this.userAge = 30;
      //this.$emit("ageWasUpdated",this.userAge);

      //data pass for communicate sibling to sibling
      eventBus.$emit("ageWasUpdated", this.userAge);
    }
  }
};
</script> 
<style scoped>
div {
  background-color: lightgreen;
}
</style>