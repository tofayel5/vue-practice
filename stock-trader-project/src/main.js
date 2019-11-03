import Vue from "vue";
import VueResource from "vue-resource";
import VueRouter from "vue-router";
import App from "./App.vue";
import store from "./store/store";
import { routes } from "./routes";

//for funds currency
Vue.filter("currency", value => {
  return "$" + value.toLocaleString();
});

Vue.use(VueRouter);
Vue.use(VueResource);
Vue.http.options.root = "https://stock-trader-project-4db57.firebaseio.com/";
const router = new VueRouter({
  mode: "history",
  routes
});

new Vue({
  el: "#app",
  router,
  store,
  render: h => h(App)
});
