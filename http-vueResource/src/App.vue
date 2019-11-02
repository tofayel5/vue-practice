<template>
  <div class="container">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <h2>Http</h2>

      <div class="form-group">
        <label>User Name</label>
        <input type="text" class="form-control" placeholder="Enter Name" v-model="user.name" />
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Enter email" v-model="user.email" />
      </div>
      <button @click="submit" class="btn btn-primary">Submit</button>
      <hr />
      <button @click="fatchData" class="btn btn-primary">Get Data</button>
      <br><br>
      <ul class="list-group">
        <li class="list-group-item" v-for="n in users">{{ n.name}}-{{ n.email}}</li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      user: {
        name: " ",
        email: " "
      },
      users: []
    };
  },
  methods: {
    submit() {
      this.$http
        .post("https://http-vue-daa60.firebaseio.com/data.json", this.user)
        .then(
          response => {
            console.log("response");
          },
          error => {
            console.log("error");
          }
        );
    },
    fatchData() {
      this.$http
        .get("https://http-vue-daa60.firebaseio.com/data.json")
        .then(response => {
          return response.json();
        })
        .then(data => {
          const resultArray = [];
          for (let key in data) {
            resultArray.push(data[key]);
          }
          this.users = resultArray;
        });
    }
  }
};
</script>

<style>
</style>
