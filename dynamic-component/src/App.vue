<template>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <button @click="selectedComponent = 'appQuote'">Quote</button>
        <button @click="selectedComponent = 'appAuthor'">Author</button>
        <button @click="selectedComponent = 'appNew'">New</button>
        <p>{{ selectedComponent}}</p>
        <keep-alive>
          <component :is="selectedComponent"></component>
        </keep-alive>
      </div>
    </div>
  </div>
</template>

<script>
import Quote from "./components/Quote";
import Author from "./components/Author";
import New from "./components/New";
export default {
  data() {
    return {
      selectedComponent: "appQuote"
    };
  },
  components: {
    appQuote: Quote,
    appAuthor: Author,
    appNew: New
  }
};
</script>

<style>
</style>
