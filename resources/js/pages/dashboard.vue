<script lang="ts" setup>
    import TopNavBar from '@/components/TopNavbar.vue';
    import Search from '@/components/Search.vue';
    import DataTahunTerakhir from '@/components/DataTahunTerakhir.vue';
    import DataTahunBerjalan from '@/components/DataTahunBerjalan.vue';
    import RiwayatAkreditasi from '@/components/RiwayatAkreditasi.vue';
    import PerbandinganData from '@/components/PerbandinganData.vue';
    import BottomNavBar from '@/components/BottomNavBar.vue';
    // import { onMounted } from 'vue';

    const props = defineProps({
            datas : Array,
        })

  //   onMounted(() => {
  //   console.log(props.datas);
  //   console.log(props.sumKuotas);
  // })
</script>

<template>
  <div class="flex flex-column">
    <TopNavBar />
    <Search />
    <DataTahunTerakhir :datas="datas"/>
    <DataTahunBerjalan  />
    <RiwayatAkreditasi />
    <PerbandinganData />
    <BottomNavBar />
  </div>
</template>

<style>
  body {
    font-family: Inter !important;
    font-size: 16px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    margin: 0;
    padding: 0;
    width: 100%;
    background-color: #F5FBFF !important;
  }
</style>
