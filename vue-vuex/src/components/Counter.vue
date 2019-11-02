<template>
  <div>
    <button class="btn btn-primary" @click="increment(10)">Increment</button>
    <button class="btn btn-primary" @click="decrement(10)">Decrement</button>
  </div>
</template>

<script>
//import { mapMutations } from "vuex";
import { mapActions } from "vuex";
export default {
  methods: {
    // increment() {
    //   // this.$store.state.counter++;
    //   this.$store.commit("increment");
    // },
    // decrement() {
    //   //this.$store.state.counter--;
    //   this.$store.commit("decrement");
    // }

    //using map mutation
    //...mapMutations(["increment", "decrement"])
    ...mapActions(["increment", "decrement"])
  }
};
</script>

<style>
</style>
