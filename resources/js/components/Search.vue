<template>
  <div class="d-flex justify-content-center align-items-center searchContainer">
    <div class="searchZ2" v-show="searchText===''">
      <Icon icon="icon-park-outline:search"/>
      &nbsp;&nbsp;&nbsp;Search..
    </div>
    <input class="search" type="text" v-model="searchText"/>
  </div>
</template>

<script lang="ts" setup>
  import { ref } from 'vue'
  const searchText = ref('');
</script>

<style scoped>
  .searchContainer {
    height: 20vh;
    position: relative;
  }
  .search {
    display: flex;
    width: 50%;
    align-items: center;
    background-color: var(--color_banpem_white);
    border-radius: 100px;
    box-shadow: 4px 4px 12px 2px rgba(0, 0, 0, 0.10);
    border: none;
    padding: 10px 15px; 
  }
  .searchZ2 {
    color: var(--color_dikbud_4);
    font-size: 14px !important;
    position: absolute;
    z-index: 10;
    left: 26%;
  }
</style>