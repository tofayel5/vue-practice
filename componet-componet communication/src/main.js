import Vue from "vue";
import App from "./App.vue";
//for communicate sibling to sibling
export const eventBus = new Vue();
new Vue({
  el: "#app",
  render: h => h(App)
});
