<template>
 <Header title="Frontend Vuejs3" />
    <router-view></router-view>
</template>

<script>
import Header from './components/Header';
export default {
  name: 'App',
  components: {
      Header
  }
}
</script>

<style>

</style>
