<script lang="ts" setup>
import TopNavBar from '../components/TopNavbar.vue';
import Search from '../components/Search.vue';
import DataProvinsi from '@/components/DataProvinsi.vue';
import BottomNavBar from '../components/BottomNavBar.vue';
import {onMounted} from "vue";

    const props = defineProps({
        provinsiStatusCount: Array,

    })

    // onMounted(() => {
    //     console.log(props.statusa);
    //   })
</script>


<template>
    <div class="flex flex-column">
        <TopNavBar />
        <Search />
        <DataProvinsi
            :provinsiStatusCount="provinsiStatusCount"
        />
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
