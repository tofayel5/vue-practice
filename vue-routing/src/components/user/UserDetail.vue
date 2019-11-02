<template>
  <div>
    <h2>The User details page.</h2>
    <p>User loaded has id:{{ $route.params.id }}</p>
    <!-- manualy routing -->
    <!-- <router-link
      class="btn btn-primary"
      tag="button"
      :to="'/user/' + $route.params.id + '/edit'"
    >Edit User</router-link> -->
    <!-- named routing -->
    <router-link
      class="btn btn-primary"
      tag="button"
      :to="{ name: 'userEdit',params: { id: $route.params.id} }"
    >Edit User</router-link>
  </div>
</template>