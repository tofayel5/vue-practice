<template>
  <div class="component">
    <h3>You may view the Use details here!</h3>
    <p>Many Details.</p>
    <p>User Name:{{ myName }}</p>
    <p>User Age:{{ userAge }}</p>
    <p>Switch Name:{{ switchName() }}</p>
    <button @click="resetName">Reset Name</button>
    <button @click="resetFunction()">Reset Name Function</button>
  </div>
</template>
<script>

//for communicate sibling to sibling
import { eventBus } from "../main";

export default {
  props: {
    myName: {
      type: String
    },
    resetFunction: Function, 
    userAge: Number
  }, 
  methods: {
    switchName() {
      return this.myName
        .split("")
        .reverse()
        .join("");
    },
    resetName() {
      this.myName = "Topu";

      this.$emit("emitName", this.myName);
    }
  },
  created() {
    //data catch for communicate sibling to sibling
    eventBus.$on("ageWasUpdated", data => {
      this.userAge = data;
    });
  }
};
</script> 
<style scoped>
div {
  background-color: lightcoral;
}
</style>