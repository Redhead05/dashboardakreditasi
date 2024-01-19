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
          <select @change="selectYear" class="form-select">
              <option>2019</option>
              <option>2020</option>
              <option>2021</option>
              <option>2022</option>
          </select>
      </div>
    </div>
    <div class="row gx-2 mt-4">
      <div class="col-sm-7">
        <div class="card">
          <div class="card-body">
            <div class="row gx-5">
              <div class="col-8 separator_col">
                <h5 class="card-title mb-1">Capaian Nasional</h5>
                <h5 class="card3_desc mb-4">Total 44.094</h5>
                <apexchart :width="widthChart" type="bar" :options="chartOptions" :series="series"></apexchart>
              </div>
              <div class="col-4">
                <div class="d-flex flex-column h-90">
                  <div class="d-flex flex-row align-items-center margin_data_jumlah_asesi mb-3">
                    <Icon class="card1_circle_icon" icon="bxs:school" color="#FFFFFF" width="100" height="100"/>
                    <div class="mx-4 d-flex flex-column">
<!--                      <div class="card3_num">{{populasis}}</div>-->
                      <div class="card3_num" v-for="(populasi, index) in populasis" :key="index">
                        {{ populasi.total_populasi }}
                      </div>
                      <div class="card3_desc">Total Populasi</div>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center margin_data_jumlah_asesi">
                    <apexchart :width="widthRadialBar" type="radialBar" :options="chartOptionsRadialBar1" :series="seriesRadialBar1"></apexchart>
                    <div class="d-flex flex-column desc_data_jumlah_asesi">
                      <div class="card3_num">{{ totalakreditasi }}</div>
                      <div class="card3_desc">Di Akreditasi</div>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center margin_data_jumlah_asesi">
                    <apexchart :width="widthRadialBar" type="radialBar" :options="chartOptionsRadialBar2" :series="seriesRadialBar2"></apexchart>
                    <div class="d-flex flex-column desc_data_jumlah_asesi">
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
        <div class="card card_height">
          <div class="card-body">
            <h5 class="card-title mb-1">Capaian Sasaran</h5>
            <h5 class="card3_desc mb-4">Tahun 2022</h5>
            <div class="d-flex flex-row align-items-center justify-content-center ">
              <apexchart type="donut" width="400" :options="chartOptionsDonut" :series="seriesDonut"></apexchart>
              <div class="d-flex flex-column">
                <div class="d-flex flex-row justify-content-center align-items-center">
                  <div class="circle_icon" :style="{ 'background-color': capaianSasaran[0].Color }"></div>
                  <div class="ms-2 d-flex flex-column">
                    <div class="card3_num">{{ capaianSasaran[0].Total }}</div>
                    <div class="card3_desc">{{ capaianSasaran[0].Desc }}</div>
                  </div>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center">
                  <div class="circle_icon" :style="{ 'background-color': capaianSasaran[1].Color }"></div>
                  <div class="ms-2 d-flex flex-column">
                    <div class="card3_num">{{ capaianSasaran[1].Total }}</div>
                    <div class="card3_desc">{{ capaianSasaran[1].Desc }}</div>
                  </div>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center">
                  <div class="circle_icon" :style="{ 'background-color': capaianSasaran[2].Color }"></div>
                  <div class="ms-2 d-flex flex-column">
                    <div class="card3_num">{{ capaianSasaran[2].Total }}</div>
                    <div class="card3_desc">{{ capaianSasaran[2].Desc }}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts" setup>
  import {Icon} from "@iconify/vue";
  import {onMounted} from "vue";

  const props = defineProps({
      datas : Array,
      populasis: Array,
      totalakreditasi: Array,
      // belumakreditasi: Array,
  })

  // onMounted(() => {
  //       console.log(props.populasis)
  // })

  const widthChart = '100%';

  const chartOptions = {
    xaxis: {
      categories: props.datas.category
    },
    // colors: ['var(--color_dikbud_3)'],
  }
  const series = props.datas.data;

  const widthRadialBar = '75%';
  const chartOptionsRadialBar1 = {
    colors: ['var(--color_dikbud_3)'],
    plotOptions: {
      radialBar: {
        hollow: {
          size: '30%',
        },
        offsetX: -55,
        offsetY: -20,
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
        offsetX: -55,
        offsetY: -20,
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
  const capaianSasaran = [
    {
      Color: 'var(--color_primary_normal)',
      Total: '14.876',
      Desc: 'Total Sasaran',
    },
    {
      Color: 'var(--color_dikbud_2)',
      Total: '10.837',
      Desc: 'Akreditasi Baru',
    },
    {
      Color: 'var(--color_neutral_90)',
      Total: '4.983',
      Desc: 'Reakreditasi',
    },
  ]
  const colorsDonut = capaianSasaran.map(a => a.Color)
  const chartOptionsDonut = {
    dataLabels: {
      enabled: false
    },
    legend: {
      show:false,
    },
    colors: colorsDonut
  }
  const seriesDonut = [
    80,15,5
  ];

  const selectYear = (event) => {
      const selectedYear = event.target.value;
      const currentUrl = window.location.href;

      const url = new URL(currentUrl);
      url.searchParams.set('year', selectedYear);
      window.location.href =  url.toString();
      window.history.replaceState({}, '', url.toString());
  };
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
  .card_height {
    height: 100% !important;
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
    border-right: 1px solid var(--color_neutral_90);
  }
  .circle_icon {
    width: 16px;
    height: 16px;
    border-radius: 100%;
  }
  .margin_data_jumlah_asesi {
    margin: 3% 0;
    position: relative;
  }
  .desc_data_jumlah_asesi {
    position:absolute;
    z-index: 10;
    top: 3vh;
    left: 8.5vw;
  }

  @media (min-width: 1400px) {
    .desc_data_jumlah_asesi{
      top: 2.5vh;
      left: 7vw;
    }
  }
</style>
