<script lang="ts" setup>
    import TopNavBar from '@/components/TopNavbar.vue';
    import Search from '@/components/Search.vue';
    import DataTahunTerakhir from '@/components/DataTahunTerakhir.vue';
    import DataTahunBerjalan from '@/components/DataTahunBerjalan.vue';
    import RiwayatAkreditasi from '@/components/RiwayatAkreditasi.vue';
    import PerbandinganData from '@/components/PerbandinganData.vue';
    import BottomNavBar from '@/components/BottomNavBar.vue';
    import {onMounted, watch} from "vue";

    const props = defineProps({
        chartGrading : Array,
        populasis: Number,
        diakreditasis: Number,
        capaianSasaranData: Array,
    })

    // onMounted(() => {
// //     // console.log(props.chartGrading);
// //     // console.log(props.sumKuotas);
// //     console.log(props.populasis);
//     if (props.capaianSasaranData && props.capaianSasaranData.length > 0) {
//         console.log('capaianSasaran has data');
//     } else {
//         console.log('capaianSasaran does not have data');
//     }
//   })

</script>

<template>
  <div class="flex flex-column">
    <TopNavBar />
    <Search />
    <DataTahunTerakhir
        :datas="chartGrading"
        :populasis="populasis"
        :diakreditasis="diakreditasis"
        :capaianSasaranData="capaianSasaranData"
    />
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
