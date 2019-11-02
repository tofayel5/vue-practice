<template>
  <div class="component">
    <h1>The User Component</h1>
    <p>I'm an awesome User!</p>
    <p>User Name:{{ name }}</p>
    <p>User age:{{ age }}</p>
    <button @click="changeName">Change my name</button>
    <hr />
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <app-user-detail
          :myName="name"
          :userAge="age"
          @emitName="name = $event"
          :resetFunction="resetName"
        ></app-user-detail>
      </div>
      <div class="col-xs-12 col-sm-6">
        <app-user-edit :userAge="age" @ageWasUpdated="age = $event"></app-user-edit>
      </div>
    </div>
  </div>
</template>

<script>
import UserDetail from "./UserDetail.vue";
import UserEdit from "./UserEdit.vue";
export default {
  data() {
    return {
      name: "Topu",
      age: 27
    };
  },
  methods: {
    changeName() {
      this.name = "Tofayel";
    },
    resetName() {
      this.name = "Topu";
    }
  },
  components: {
    appUserDetail: UserDetail,
    appUserEdit: UserEdit
  }
};
</script> 

<style scoped>
div {
  background-color: lightcyan;
}
</style>