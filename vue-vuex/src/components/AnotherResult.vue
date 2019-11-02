<template>
  <div>
    <p>Counted is: {{ doubleCounter }}</p>
    <p>Total Click is: {{ stringCounter }}</p>
  </div>
</template>
<script>
import { mapGetters } from "vuex";
export default {
  computed: {
    //using map getters
    ...mapGetters(["doubleCounter", "stringCounter"])
    //using getters
    /* counter() {
      return this.$store.getters.doubleCounter;
    },
    clicks() {
      return this.$store.getters.stringCounter;
    }*/
  }
};
</script>