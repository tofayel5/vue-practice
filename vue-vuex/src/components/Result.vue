<template>
  <div>
    <p>Counted is: {{ counter }}</p>
  </div>
</template>
<script>
//import { mapGetters } from "vuex";
export default {
  computed: {
    counter() {
      return this.$store.getters.doubleCounter;
    }

    //...mapGetters(["doubleCounter", "stringCounter"])
  }
};
</script>