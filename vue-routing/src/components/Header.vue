<template>
  <ul class="nav nav-pills">
    <!-- <li class="nav-item">
      <router-link class="nav-link" to="/">Home</router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/user">User</router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="#">Home</router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="#">Home</router-link>
    </li>-->
    <router-link to="/" tag="li" active-class="active" exact>
      <a class="nav-link">Home</a>
    </router-link>
    <router-link to="/user" tag="li" active-class="active">
      <a class="nav-link">User</a>
    </router-link>
    <!-- <router-link to="#" tag="li" active-class="active">
      <a class="nav-link">Link1</a>
    </router-link>
    <router-link to="#" tag="li" active-class="active">
      <a class="nav-link">Link2</a>
    </router-link>-->
  </ul>
</template>