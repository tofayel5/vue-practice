<template>
  <div class="container">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <h2>Filters ans Mixins</h2>
      <p>{{ text | toUppercase | to-lowercase}}</p>
      <hr />
      <input v-model="filterText" />
      <ul>
        <li v-for="fruit in filteredFruits">{{ fruit }}</li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      text: "Hello world",
      fruits: ["Apple", "Banana", "Mango", "Melon"],
      filterText: ""
    };
  },
  filters: {
    toUppercase(value) {
      return value.toUpperCase();
    }
  },
  computed: {
    filteredFruits() {
      return this.fruits.filter(element => {
        return element.match(this.filterText);
      });
    }
  }
};
</script>

<style>
</style>
