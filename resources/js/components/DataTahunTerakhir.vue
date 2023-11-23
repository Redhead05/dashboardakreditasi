<template>
  <div class="m-4">
    <div class="d-flex justify-content-between">
      <div class="title">Data Tahun Terakhir</div>
      <div class="d-flex flex-row justify-content-end gap-2 w-25">
        <select class="form-select">
          <option selected>Semua</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        <select class="form-select">
          <option selected>2018</option>
          <option value="1">2019</option>
          <option value="2">2020</option>
          <option value="3">2021</option>
        </select>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-sm-7">
        <div class="card">
          <div class="card-body">
            <div class="row ">
              <div class="col separator_col px-4">
                <h5 class="card-title mb-1">Capaian Nasional</h5>
                <h5 class="card3_desc mb-4">{{ datas }}</h5>
                <apexchart width="500" type="bar" :options="chartOptions" :series="series"></apexchart>
              </div>
              <div class="col mx-4">
                <div class="d-flex flex-column">
                  <div class="d-flex flex-row align-items-center my-4">
                    <Icon class="card1_circle_icon" icon="bxs:school" color="#FFFFFF" width="90" height="90"/>
                    <div class="mx-4 d-flex flex-column">
                      <div class="card3_num">54.028</div>
                      <div class="card3_desc">Total Populasi</div>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center my-4">
                    <apexchart width="210" type="radialBar" :options="chartOptionsRadialBar1" :series="seriesRadialBar1"></apexchart>
                    <div class="mx-4 d-flex flex-column">
                      <div class="card3_num">44.094</div>
                      <div class="card3_desc">Di Akreditasi</div>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center my-4">
                    <apexchart width="210" type="radialBar" :options="chartOptionsRadialBar2" :series="seriesRadialBar2"></apexchart>
                    <div class="mx-4 d-flex flex-column">
                      <div class="card3_num">10.283</div>
                      <div class="card3_desc">Belum di Akreditasi</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title mb-1">Capaian Sasaran</h5>
            <h5 class="card3_desc mb-4">Tahun 2022</h5>
            <apexchart type="donut" width="500" :options="chartOptionsDonut" :series="seriesDonut"></apexchart>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script lang="ts" setup>

import { onMounted } from 'vue';

  const props = defineProps({
            datas : Array,
        })
  //solusi lain selain props bisa pakai stateManagement

  onMounted(() => {
    console.log(props.datas);
    // console.log(props.sumKuotas);
  })

  const chartOptions = {
    xaxis: {
      categories: ['A', 'B', 'C', 'TT',]
    },
    colors: ['var(--color_dikbud_3)'],
    // plotOptions: {
    //   bar: {
    //     dataLabels: {
    //       enabled: false, // Set this to false to hide values inside bars
    //     },
    //   },
    // },
  }
  const series = [{
    name: 'series-1',
    data: [60000, 80000, 60000, 20000,]
  }]
  const chartOptionsRadialBar1 = {
    colors: ['var(--color_dikbud_3)'],
    plotOptions: {
      radialBar: {
        hollow: {
          size: '30%',
        },
        // offsetX: -70,
        // offsetY: -40,
        dataLabels: {
          name: {
            show: false,
          },
          value: {
            show: true,
          },
        },
      },
    },
  }
  const seriesRadialBar1 = [80.2]
  const chartOptionsRadialBar2 = {
    colors: ['var(--color_dikbud_3)'],
    plotOptions: {
      radialBar: {
        hollow: {
          size: '30%',
        },
        // offsetX: -70,
        // offsetY: -40,
        dataLabels: {
          name: {
            show: false,
          },
          value: {
            show: true,
          },
        },
      },
    },
  }
  const seriesRadialBar2 = [20.8]
  const chartOptionsDonut = {
    dataLabels: {
      enabled: false
    },
    legend: {
      position: 'right',
      // formatter: function(val:any, opts:any) {
      //   return `
      //     <div style="
      //       color: #213240;
      //       font-family: Inter;
      //       font-size: 24px;
      //       font-style: normal;
      //       font-weight: 600;
      //       line-height: normal;
      //     ">${opts.w.globals.series[opts.seriesIndex].total}</div>
      //     <div style="
      //       color: #213240;
      //       font-family: Inter;
      //       font-size: 12px;
      //       font-style: normal;
      //       font-weight: 300;
      //       line-height: normal;
      //       margin-bottom: 15%;
      //     ">${opts.w.globals.series[opts.seriesIndex].desc}</div>
      //   `
      // }
    }
  }
  const seriesDonut = [
    // {value:80,total:'14.876',desc:'Total Sasaran'},
    // {value:15,total:'10.837',desc:'Akreditasi Baru'},
    // {value:5,total:'4.983',desc:'Reakreditasi'},
    80,15,5
  ];
</script>

<style scoped>
  .title{
    color: var(--color_dikbud_4);
    font-size: 18px !important;
  }
  .form-select {
    color: var(--color_dikbud_4);
    width: 50%;
  }
  .card1_circle_icon{
    padding: 1.2em;
    background-color: var(--color_dikbud_3);
    border-radius: 50%;
  }

  .card3_num{
    color: var(--color_dikbud_4);
    font-size: 24px !important;
  }
  .card3_desc{
    color: var(--color_dikbud_4);
    font-size: 12px !important;
    font-weight: 300 !important;
  }
  .separator_col{
    height: 100%;
    border-right: 1px solid var(--color_neutral_90);
    padding: 0;
    margin: 0;
  }
</style>

